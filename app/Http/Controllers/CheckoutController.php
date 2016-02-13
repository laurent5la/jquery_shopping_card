<?php
    namespace App\Http\Controllers;

    use GuzzleHttp\Client;
    use GuzzleHttp\Exception\RequestException;

    class CheckoutController extends Controller
    {

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->client = new Client();
            $this->config = app()['config'];
            $this->clientID = $this->config->get('owl.client_id');
            $this->clientSecret = $this->config->get('owl.client_secret');
            $this->cacheKeyForOWLToken = 'OWL-TOKEN' . '-' . $this->clientID;
        }

        private function getAccessToken()
        {
            if (!Cache::has($this->cacheKeyForOWLToken)) {
                $this->accessToken = $this->createAccessToken();

                if (is_null($this->accessToken)) {
                    return null;
                }
                Cache::put($this->cacheKeyForOWLToken, $this->accessToken, 24 * 60);
            }
            return Cache::get($this->cacheKeyForOWLToken);
        }

        private function createAccessToken()
        {
            $this->client->setDefaultOption('headers', $this->xSSLOptions);

            $URL = Config::get('owl.base_url') . '/v1/oauth/token';
            $params = array(
                'query' => array(
                    'grant_type' => 'client_credentials',
                    'client_id' => $this->clientID,
                    'client_secret' => $this->clientSecret,
                )
            );

            $response = $this->getGuzzleRequest($URL, $params);

            if ($response) {
                $this->accessToken = $response['access_token'];

                return $this->accessToken;
            }
            return null;
        }
    }

<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'b489d231e9b949e6895caca744718ae65de31e6566b448f9b430df8ca411b7fbe01bd9eb98b848a4b90a68a425d2261d7b7c98f0f15d4219a85f7e8e6718ac7de5257416321a47f6b85bf64a7471fbcbc31a9afc1854432b8bfeef396588f0a5cf96bef14fa646a6b8a564367044b2684d8bee2d1b9243aebbfa80ddf90c18fd');

function sign ($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
}

function commaSeparate ($dataToSign) {
    return implode(",",$dataToSign);
}

?>

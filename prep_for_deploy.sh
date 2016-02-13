gulp --production

rm -rf deploy-*.tgz

NOW=$(date +"%Y%d%m-%H%M%S")

tar -czf deploy-${NOW}.tgz \
public/images \
public/fonts \
public/index.php \
public/js \
public/css \
public/favicon.ico \
resources \
app \
config \
bootstrap \
server.php \
vendor \
node_modules \
tests \
storage \
database 

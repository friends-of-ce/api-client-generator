# api-client-generator
API client generator

Useful command to regenerate the client:

    openapi-generator-cli generate -g php -i "https://demo.channelengine.net/api/swagger/merchant/swagger.json" --artifact-version=${{version}} --output=merchant-api-client-php -c config.json  --skip-validate-spec

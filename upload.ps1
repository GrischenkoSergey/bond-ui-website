az acr login --name setcontainers.azurecr.io

docker tag paddlenextjsstarterkit:latest setcontainers.azurecr.io/paddlenextjsstarterkit:1.0.0
docker push setcontainers.azurecr.io/paddlenextjsstarterkit:1.0.0

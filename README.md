# Pixmodels - Service de communication audio-visuelle
Présentation des prestation de pixmodels, société de services en supports de communication

## Deploiement de l'application avec docker-compose  
- Executer la commande : ``` docker stop stack-php-1 stack-pixmodels-1 ```
- Executer la commande : ``` docker rm stack-php-1 stack-pixmodels-1 ```
- Executer la commande : ``` docker volume rm stack_vol_pixmodels ```
- Executer la commande : ``` docker-compose up -d ```
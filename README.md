# CI/CD Project Autodeploying a wordpress site using docker on digital ocean using github actions

This is a small ci/cd example on how to auto-deploy a wordpress site on Digital Ocean using github actions 



# Requirements 

in your local environment set 
```
CERT_RESOLVER=
```
in the remote set 
```
CERT_RESOLVER=letencrypt
```
also you must decrate the following variables in the git repo secrets
   PROJECT_NAME
   PROJECT_BASE_URL
   PROJECT_STAGE_URL
   PROJECT_PRODUCTION_URL
   PROJECT_VERSION
   DB_NAME
   DB_USER
   DB_PASSWORD
   DB_ROOT_PASSWORD
   DB_HOST
   DOMAIN
   USERPWD
   
# 1. local environment 

for local environment edit .env
then do a 
```
docker-compose up -d 
```
visit http://localhost:80/


# 2. Setup Remote (digital ocean) environment 

for the remote environment see your github actions variables 
## 2.1 create droplet on digital ocean using the Docker image  

## 2.2 create user on digitl ocean to run the self-hosted runner 
```
 adduser agelos
 usermod -aG sudo agelos
```
## 2.3 add a runner through github 

## 2.3.1 add a new runner
see 
https://docs.github.com/en/actions/hosting-your-own-runners/managing-self-hosted-runners/adding-self-hosted-runners
    
1.  Under your repository name, click **Settings**. If you cannot see the "Settings" tab, select the dropdown menu, then click **Settings**.
    
    
2.  In the left sidebar, click **Actions**, then click **Runners**.
    
3.  Click **New self-hosted runner**.
    
4.  Select the operating system image and architecture of your self-hosted runner machine.

```
# Create a folder
mkdir actions-runner && cd actions-runner# Download the latest runner package
curl -o actions-runner-linux-x64-2.316.1.tar.gz -L https://github.com/actions/runner/releases/download/v2.316.1/actions-runner-linux-x64-2.316.1.tar.gz# Optional: Validate the hash
echo "XXXXXXXXXXXX  actions-runner-linux-x64-2.316.1.tar.gz" | shasum -a 256 -c# Extract the installer
tar xzf ./actions-runner-linux-x64-2.316.1.tar.gz
```

## 2.3.2 Create the runner and start the configuration experience
```
./config.sh --url https://github.com/agelospanagiotakis/do_docker_github_actions_wordpress --token XXXXXXX
```

Last step, run it!
```
./run.sh
```
Using your self-hosted runner
# Use this YAML in your workflow file for each job

runs-on: self-hosted
    


## 2.3.2 allow user to run docker and create the docker actions service to run github actions on a permanent base (as a service)

```
 #note exit from user agelos using 'exit' (and be a root user!)
 usermod -aG docker agelos
 sudo groupadd docker
 sudo usermod -aG docker agelos
 sudo su - agelos
```
finaly run 

```
./run.sh 
```
 you should see something like 
 ```
 Running job: Build
```

after test enable permanently to run using 


```
# sudo ./svc.sh install
sudo ./svc.sh install root
sudo ./svc.sh start
```
better install it as root that the user you might fall for this https://github.com/actions/runner/issues/434

## 3.

see the file on .github/workflows/DIGITALOCEAN_DEPLOY.yml to review the proccess



# 4. tls 

https://www.digitalocean.com/community/tutorials/how-to-use-traefik-v2-as-a-reverse-proxy-for-docker-containers-on-ubuntu-20-04?utm_campaign=emea_brand_kw_en_cpc&utm_adgroup=digitalocean_exact_phrase&_keyword=digitalocean&_device=c&_adposition=&utm_content=conversion&utm_medium=cpc&utm_source=google&gad_source=1&gclid=CjwKCAjwi_exBhA8EiwA_kU1Msk3kFvo8q1rbFt_Xx2goZp9iskmWudMCk6n0DVZtxAde671A5_PARoCrbYQAvD_BwE

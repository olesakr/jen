pipeline {

  agent {
    kubernetes {
      yamlFile 'builder.yaml'
    }
  }

  stages {

    stage('Deploy App to Kubernetes') {
      steps {
        container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl create ns crud'
            sh 'kubectl apply -f ./manifests -n crud'
          }
        }
      }
    }

    stage('Test'){
      steps{
        script{
          
         
          echo '-------------Start-------------'
         container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl describe svc -n crud web-server'
            sh 'kubectl describe po -n crud web-server-7857dcd7b7-hkzpw'

          }
        }
          echo '-------------End-------------'
          
          }
        }
      }
    }

  
}
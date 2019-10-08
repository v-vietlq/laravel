pipeline {

    agent any
    
    environment {
        IP = '144.202.3.128'
    }
    
    stages {

        stage('Build') {
            steps {
                sh 'sudo bash ./jenkins/build/build.sh'
            }
        }

        stage('Test') {
            steps {
                sh 'sudo bash ./jenkins/test/test.sh'
            }
        }

        stage('Push') {
            steps {
                sh 'sudo bash ./jenkins/push/push.sh'
            }
        }

        stage('Deploy') {
            steps {
                sh "sudo bash ./jenkins/deploy/deploy.sh {$IP}"
            }
        }
    }
}
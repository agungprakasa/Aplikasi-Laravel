pipeline {
  agent { label 'linux' }
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
  }
  stages {
  stage('Code Quality Check via SonarQube') {  
            environment {    
              SONAR_SCANNER = tool('Sonar Scanner')
            } 
            steps {  
                script {    
                    withSonarQubeEnv("sq1") {
                      sh """${SONAR_SCANNER}/bin/sonar-scanner \
                        -Dsonar.sources=. \
                        -Dsonar.projectKey=laravel \
                        -Dsonar.host.url=http://192.168.9.219:9000 \
                        -Dsonar.login=7b5f1cf1ec904372d308fae741d5e0fda0b879cd""" 
                    }   
                } 
            }
        }
  }
}
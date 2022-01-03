pipeline {
  agent { label 'linux' }
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
  }
  stages {
  stage('Code Quality Check via SonarQube') {  
            // environment {    
            //   SONAR_SCANNER = tool('Sonar Scanner')
            // } 
            steps {  
                script {    
                    withSonarQubeEnv("sq1") {
                      sh """./mvnw clean org.sonarsource.scanner.maven:sonar-maven-plugin:3.9.0.2155:sonar \
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
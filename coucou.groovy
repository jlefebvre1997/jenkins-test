job('Grrovy') {
    scm {
        git('https://github.com/jlefebvre1997/jenkins-test.git')
    }
    triggers {
        scm('H/5 * * * *')
    }
    steps {
        shell("echo hello")
        shell("docker-compose up -d")
    }
}
job('Grrovy') {
    triggers {
        scm('H/5 * * * *')
    }
    steps {
        shell("echo coucou")
        shell("docker-compose up -d")
    }
}
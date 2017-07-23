# CRUD API / Front-end Interface

- Clone the repo
- Copy `config/db_config.sample.php` as `config/db_config.sample.php`  and update the seetings accordingly.
- If you have docker, simple run `docker-compose up -d` in the root and view the website at http://localhost:9867/. Look at the notes 
- Run `chmod +x setup.sh`  to make it executable
- Run `./setup.sh`

	> If you skipped the step above, just run `sh setup.sh`. Use `sudo setup.sh` if needed.	
- Setup a virtual host with `http://apicrud.dev` and point it to `public` directory

Access the website at http://apicrud.dev or http://localhost:9090

If you use the docker URL i.e http://localhost:9867 or http://localhost:9090, update the `public/index.php` accordingly on `line #17` i.e. 
	`var url = "http://apicrud.dev/";`

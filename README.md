# CRUD API / Front-end Interface

- Clone the repo
- Copy `config/db_config.sample.php` as `config/db_config.sample.php`  and update the seetings accordingly.
- Run `chmod +x setup.sh`  to make it executable
- Run `./setup.sh`

	> If you skipped the step above, just run `sh setup.sh`. Use `sudo setup.sh` if needed.	
- Setup a virtual host with `http://apicrud.dev` and point it to `public` directory

Access the website at http://apicrud.dev or http://localhost:9090

If you use http://localhost:9090, update the `public/index.php` accordingly on `line #17` i.e. 
	`var url = "http://apicrud.dev/";`

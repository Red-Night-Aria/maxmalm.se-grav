name = maxmalmgrav
create: 
	docker run \
	-v $(pwd)/user:/var/www/html/user \
	-p 3030:80 \
	--name $(name) benjick/grav

run:
	docker start $(name)

logs:
	docker logs -f $(name)

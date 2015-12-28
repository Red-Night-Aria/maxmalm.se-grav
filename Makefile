name = maxmalmgrav
create:
	docker run \
	-v $(CURDIR)/user:/var/www/html/user \
	-p 3030:80 \
	--name $(name) -d benjick/grav

run:
	$(MAKE) create
	$(MAKE) logs

start:
	docker start $(name)

stop:
	docker stop $(name)

logs:
	docker logs -f $(name)

clean:
	docker kill $(name) && docker rm $(name)

cache:
	docker exec $(name) bin/grav clear-cache

gpm:
	docker exec $(name) bin/gpm install $(i)

# Redis-php-chattingRoom

**this is the simple demo which is based on the extension of phpredis and the nosql db of redis**

## Introduction
1. this demo depend on the phpredis and redis.you will have to be used
2. the redis's structure is following
	* hashmap(store the login username and password)
		- key:login
		- member:user1 or user2 or usern
		- value:password
	* sorted sets(create n keys when we have n users)
		- key:user2-content(or user1-content)
		- score:timestamp(the content createtime)
		- value:content
	* string(create n keys when we have n users)
		- key:user2-timestamp
		- value:timestamp(the user last content's timestamp)
> the string timestamp is the best key;
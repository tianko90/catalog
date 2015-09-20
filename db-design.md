## users ##

|   name   |      type     |             other           |
| -------- | ------------- | --------------------------- |
|    id    |  unsigned int | primary_key, auto_increment |
| username | varchar (128) |            unique           |
|  email   | varchar (128) |            unique           |
| password | varchar (128) |                             |


## genres ##

| name | type | other |
| --- | --- | ---|
| id | unsigned int | primary_key, auto_increment |
| name | varchar (128) | unique |


## movies ##

| name | type | other |
| --- | --- | --- |
| id | unsigned int | primary_key, auto_increment |
| title | varchar (128) | |
| poster | varchar(255) | unique |
| rating | unsigned short | |
| restrictions | short | |


## movies_genres ##

| name | type | other |
| --- | --- | --- |
| movie_id | unsigned int | foreign_key |
| genre_id | unsigned int | foreign_key |
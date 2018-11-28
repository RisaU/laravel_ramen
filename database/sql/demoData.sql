/*
id int(10)
user_id int(10) UN
order_id int(10) UN
total_point int(11)
point_action_flg   1: get, 0: use
*/

INSERT INTO ramen.point_histories Values
(1, 2, 1, 10, 1, "2018-11-01 12:10:00", "2018-01-01 00:00:00"),
(2, 2, 2, 10, 1, "2018-11-02 12:00:00", "2018-01-01 00:00:00"),
(3, 2, 3, 80, 1, "2018-11-10 17:30:00", "2018-01-01 00:00:00");

INSERT INTO ramen.point_histories Values
(4, 5, 1, 10, 1, "2018-11-01 12:10:00", "2018-01-01 00:00:00"),
(5, 5, 2, 10, 1, "2018-11-02 12:00:00", "2018-01-01 00:00:00"),
(6, 5, 3, 80, 1, "2018-11-10 17:30:00", "2018-01-01 00:00:00");


INSERT INTO ramen.point_histories Values
(8, 9, 3, 10, 1, "2018-11-28 22:30:00", "2018-01-01 00:00:00");

INSERT INTO ramen.point_histories Values
(9, 2, 3, 10, 1, "2018-11-28 22:30:00", "2018-01-01 00:00:00");


INSERT INTO ramen.point_histories Values
(10, 17, 3, 45, 1, "2018-11-28 22:30:00", "2018-01-01 00:00:00");

INSERT INTO ramen.points VALUES
(2, 5, 100, "2017-11-17", "2018-11-27 15:49:00");

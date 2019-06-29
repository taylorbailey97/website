-- Schedules table --
CREATE TABLE schedules (
	schID serial primary key,
	sTime TIMEstamp without time zone not null,
	taken bool not null
);
Drop table schedules; 

ALTER TABLE schedules
drop column sTime;

ALTER TABLE schedules
ADD COLUMN sTime timestamp without time zone;

ALTER TABLE schedules
ADD COLUMN taken bool;

INSERT INTO schedules (sTime, taken)
VALUES (TIMESTAMP '2019-06-29 04:00:00', false);

INSERT INTO schedules (sTime, taken)
VALUES (TIMESTAMP '2019-06-29 04:15:00', false);

INSERT INTO schedules (sTime, taken)
VALUES (TIMESTAMP '2019-06-29 04:30:00', false);

INSERT INTO schedules (sTime, taken)
VALUES (TIMESTAMP '2019-06-29 04:45:00', false);




-- Appointments table --
CREATE TABLE appointments (
	appID serial primary key,
	fName varchar(80) not null,
	pNumber varchar(12) not null,
	email varchar(80) not null,
	sComment varchar(800) not null,
	schID int REFERENCES schedules (schID) 
);

ALTER TABLE appointments
ADD COLUMN schComment varchar(800);

drop table appointments;

INSERT INTO appointments (fName, pNumber, email, schID)
VALUES ('Taylor Bailey', '208-555-5555', 'taylor-bailey@live.com', 2);
	   
UPDATE schedules
SET taken = true
WHERE schID = 2;
	   
SELECT appointments.fName, appointments.pNumber, appointments.email, schedules.sTime, schedules.taken, appointments.sComment FROM appointments
RIGHT JOIN schedules
on appointments.schID=schedules.schID;








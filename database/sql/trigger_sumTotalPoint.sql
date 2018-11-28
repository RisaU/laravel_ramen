
/**
 * Update TABLE points, When TABLE point_histories is updated
 */

DELIMITER //

CREATE TRIGGER trigger_update_points AFTER INSERT ON point_histories FOR EACH ROW
  BEGIN
    UPDATE points
    SET total_point = total_point + NEW.total_point
    WHERE user_id = NEW.user_id;
  END;
 //
DELIMITER ;


/**
 * TABLE points is created automatically, when customer register
 */

DELIMITER //

CREATE TRIGGER trigger_add_info_to_points AFTER INSERT ON users FOR EACH ROW
  BEGIN
    INSERT INTO points (user_id, total_point)
    VALUES (NEW.id, 0);
  END;
 //
DELIMITER ;

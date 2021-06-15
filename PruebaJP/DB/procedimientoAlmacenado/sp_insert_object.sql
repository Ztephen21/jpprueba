DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_object`(IN `coder` VARCHAR(50), IN `nam` VARCHAR(50), IN `pric` INT, IN `quan` INT)
begin
SET @contador_inicial := (SELECT COUNT(*) FROM objects);
INSERT INTO objects VALUES(null,coder,nam,pric,quan);
SET @contador_posterior := (SELECT COUNT(*) FROM objects);
IF((@contador_inicial + 1) = @contador_posterior) THEN
SET @resultado = 1;
ELSE
SET @resultado = 0;
END IF;
SELECT @resultado;


END$$
DELIMITER ;
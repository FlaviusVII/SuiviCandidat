SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


TRUNCATE TABLE `tache`;
INSERT INTO `tache` (`id`, `numDansProcessus`, `conditionPrerequise`, `conditionFinExecution`, `libelle`, `descriptif`, `processus_id`) VALUES
(1, '1', '', '', 'Prendre contact', 'Cette tâche est très importante, si il n''est pas valide, le dossier est refusé', NULL),
(4, '2', '', '', 'Transmettre les informations et documents', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

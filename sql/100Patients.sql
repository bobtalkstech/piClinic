USE `piclinic`;
TRUNCATE TABLE `patient`;
--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `Active`, `ClinicPatientID`, `PatientNationalID`, `FamilyID`, `lastName`, `lastName2`, `firstName`, `middleInitial`, `Sex`, `BirthDate`, `HomeAddress1`, `HomeAddress2`, `HomeNeighborhood`, `HomeCity`, `HomeCounty`, `HomeState`, `ContactPhone`, `ContactAltPhone`, `BloodType`, `OrganDonor`, `PreferredLanguage`, `KnownAllergies`, `CurrentMedications`, `modifiedDate`, `createdDate`) VALUES
(1, 1, 'PT-GEN-000001', '0703-0038-00001', 'FAM000001', 'Fernández', 'Montoya', 'Yamel', 'A', 'F', '2001-07-21 00:00:00', '960 Calle Omoa', 'Apt. 131', 'Villa Santa', 'Danlí', NULL, 'El Paraíso', '111-111-0001', NULL, 'O+', 0, 'Español', 'penicillin|tetracycline|ibuprofen|naproxen|sulfa|aspirin|atracurium', NULL, '2018-05-19 21:01:57', '2018-05-19 17:01:57'),
(2, 1, 'PT-GEN-000002', '1801-0009-00002', 'FAM000002', 'Reyna', 'Cortez', 'Nandor', 'C', 'M', '2009-01-12 00:00:00', '795 Avenida Yace', 'Apt. 626', 'La Rosa', 'Yoro', NULL, 'Yoro', '111-111-0002', NULL, 'O+', 1, 'Español', 'amoxicillin|penicillin|ibuprofen|naproxen|sulfa|insulin|vecuronium', NULL, '2018-05-19 21:01:57', '2018-05-19 17:01:57'),
(3, 1, 'PT-GEN-000003', '0501-0566-00003', 'FAM000003', 'Tafoya', NULL, 'Domiciano', 'K', 'M', '1967-03-25 00:00:00', '716 Calle Paulaya', 'Apt. 699', 'SANDOVAL SORTO', 'San Pedro Sula', NULL, 'Cortés', '111-111-0003', NULL, 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:01:57', '2018-05-19 17:01:57'),
(4, 1, 'PT-GEN-000004', '0801-0041-00004', 'FAM000003', 'Valencia', 'Gurule', 'Nehueln', 'B', 'F', '1986-09-22 00:00:00', '575 Calle Col. San José o La Treinta y Nueve', 'Apt. 132', 'Támara', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0004', NULL, 'B+', 1, 'Español', NULL, NULL, '2018-05-19 21:01:57', '2018-05-19 17:01:57'),
(5, 1, 'PT-GEN-000005', '0801-0659-00005', 'FAM000003', 'Muro', 'Zayas', 'Alf', 'U', 'M', '1944-02-23 00:00:00', '469 Avenida El Burío', NULL, 'Col. La Independencia', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0005', '222-222-0005', 'A+', 0, 'Español', NULL, NULL, '2018-05-19 21:01:57', '2018-05-19 17:01:57'),
(6, 1, 'PT-GEN-000006', '0801-0895-00006', 'FAM000004', 'Polanco', 'Zarate', 'Leoncia', 'J', 'F', '2016-06-06 00:00:00', '968 Avenida Coabal', 'Apt. 669', 'Col. José Arturo Duarte ( sector 1', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0006', '222-222-0006', 'O+', 0, 'Español', 'penicillin|ibuprofen|insulin|aspirin|milk|eggs|peanuts|walnuts|soy|gluten|fish', NULL, '2018-05-19 21:01:57', '2018-05-19 17:01:57'),
(7, 1, 'PT-GEN-000007', '1501-0052-00007', 'FAM000004', 'Armendáriz', NULL, 'Amós', 'A', 'M', '1988-04-22 00:00:00', '591 Avenida Quiloma', NULL, 'San Antonio de Sahara', 'Juticalpa', NULL, 'Olancho', '111-111-0007', '222-222-0007', 'O+', 1, 'Español', 'amoxicillin|tetracycline|ibuprofen|atracurium|vecuronium', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(8, 1, 'PT-GEN-000008', '1810-0007-00008', 'FAM000004', 'Rentería', NULL, 'Galeaso', 'K', 'M', '2005-10-03 00:00:00', '557 Calle Rojas', 'Apt. 557', 'El Pataste', 'Victoria', NULL, 'Yoro', '111-111-0008', '222-222-0008', 'A+', 0, 'Español', 'amoxicillin|penicillin|sulfa|insulin|aspirin|vecuronium', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(9, 1, 'PT-GEN-000009', '0401-0120-00009', 'FAM000004', 'Venegas', NULL, 'Nubar', 'T', 'M', '1970-10-11 00:00:00', '537 Avenida El Jocón', NULL, 'Barrio Dolores o El Salto', 'Santa Rosa de Copán', NULL, 'Copán', '111-111-0009', NULL, 'A+', 1, 'Español', 'amoxicillin|tetracycline|ibuprofen|naproxen|insulin|aspirin|atracurium|milk|eggs|peanuts|gluten|fish', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(10, 1, 'PT-GEN-000010', '0501-0376-00010', 'FAM000004', 'Gómez', 'Olivera', 'Lucila', 'Q', 'F', '2011-04-08 00:00:00', '170 Calle El Lajón', 'Apt. 590', 'Col. Rivera Hernandez', 'San Pedro Sula', NULL, 'Cortés', '111-111-0010', '222-222-0010', 'O+', 1, 'Español', NULL, NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(11, 1, 'PT-GEN-000011', '1601-0001-00011', 'FAM000004', 'Marín', 'Casárez', 'Lidón', 'D', 'M', '2008-06-04 00:00:00', '772 Avenida Portillo del Frayle o del Aguacate', NULL, 'Santa Bárbara', 'Santa Bárbara', NULL, 'Santa Bárbara', '111-111-0011', NULL, 'A+', 1, 'Español', 'peanuts|soy|fish|shellfish', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(12, 1, 'PT-GEN-000012', '0704-0001-00012', 'FAM000004', 'Cepeda', 'Marrero', 'Jeny', 'S', 'F', '1996-11-22 00:00:00', '757 Calle El Cojon', NULL, 'El Paraíso', 'El Paraíso', NULL, 'El Paraíso', '111-111-0012', NULL, 'B+', 0, 'Español', 'amoxicillin|penicillin|tetracycline|naproxen|insulin|aspirin|atracurium|peanuts|soy|gluten|shellfish', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(13, 1, 'PT-GEN-000013', '1006-0001-00013', 'FAM000004', 'Aparicio', 'Atencio', 'Arnau', 'X', 'M', '1968-12-16 00:00:00', '114 Calle Salamar', NULL, 'Intibucá', 'Intibucá', NULL, 'Intibucá', '111-111-0013', '222-222-0013', 'AB+', 1, 'Español', 'milk|eggs|walnuts|fish', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(14, 1, 'PT-GEN-000014', '0501-0398-00014', 'FAM000004', 'Arellano', 'Covas', 'Ambrosia', 'Q', 'F', '1979-08-23 00:00:00', '605 Avenida Tujaca', 'Apt. 817', 'Col. Trejo', 'San Pedro Sula', NULL, 'Cortés', '111-111-0014', NULL, 'A+', 1, 'Español', 'penicillin|tetracycline|sulfa|insulin|aspirin|atracurium|peanuts|soy|gluten|fish|shellfish', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(15, 1, 'PT-GEN-000015', '0801-0847-00015', 'FAM000004', 'Cotto', 'Carbajal', 'Galatea', 'G', 'F', '1992-05-25 00:00:00', '616 Calle El Roble', NULL, 'Res. Aleman', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0015', '222-222-0015', 'B+', 0, 'Español', 'tetracycline|naproxen|aspirin', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(16, 1, 'PT-GEN-000016', '0107-0369-00016', 'FAM000005', 'Vanegas', 'Guillén', 'Norah', 'H', 'F', '2017-08-24 00:00:00', '644 Avenida Méndez', NULL, 'Barrio El Centro', 'Tela', NULL, 'Atlántida', '111-111-0016', '222-222-0016', 'O+', 0, 'Español', 'penicillin|tetracycline|ibuprofen|naproxen|atracurium|vecuronium', NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(17, 1, 'PT-GEN-000017', '0320-0001-00017', 'FAM000005', 'Castellanos', 'Madrid', 'Deolinda', 'M', 'F', '2013-01-18 00:00:00', '827 Avenida El Tesoro', 'Apt. 398', 'Las Lajas', 'Las Lajas', NULL, 'Comayagua', '111-111-0017', NULL, 'A+', 0, 'Español', NULL, NULL, '2018-05-19 21:01:58', '2018-05-19 17:01:58'),
(18, 1, 'PT-GEN-000018', '1804-0061-00018', 'FAM000005', 'Díaz', 'Porras', 'Eladio', 'H', 'M', '1994-04-17 00:00:00', '961 Calle El Bunker', 'Apt. 175', 'Agua Blanca Sur', 'El Progreso', NULL, 'Yoro', '111-111-0018', NULL, 'B+', 0, 'Español', 'peanuts|soy', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(19, 1, 'PT-GEN-000019', '0601-0003-00019', 'FAM000005', 'Pacheco', NULL, 'Llanos', 'T', 'M', '1968-06-09 00:00:00', '408 Avenida Bersunan', NULL, 'Copal Abajo', 'Choluteca', NULL, 'Choluteca', '111-111-0019', '222-222-0019', 'A+', 0, 'Español', NULL, NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(20, 1, 'PT-GEN-000020', '1801-0010-00020', 'FAM000005', 'Valdivia', NULL, 'Libitina', 'S', 'F', '1992-06-04 00:00:00', '150 Calle Arcamón', 'Apt. 348', 'La Trinidad', 'Yoro', NULL, 'Yoro', '111-111-0020', NULL, 'A+', 1, 'Español', 'amoxicillin|insulin|aspirin|vecuronium|walnuts|soy', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(21, 1, 'PT-GEN-000021', '0501-0416-00021', 'FAM000005', 'Archuleta', 'Jasso', 'Tirza', 'E', 'F', '2004-11-04 00:00:00', '343 Calle Cuyanís', 'Apt. 449', 'ALFONSO LACAYO', 'San Pedro Sula', NULL, 'Cortés', '111-111-0021', '222-222-0021', 'O+', 0, 'Español', 'milk|walnuts|soy|fish|shellfish', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(22, 1, 'PT-GEN-000022', '0719-0001-00022', 'FAM000005', 'Escalante', 'Alarcón', 'Farid', 'K', 'M', '1992-04-24 00:00:00', '983 Avenida Ucasire', NULL, 'Trojes', 'Trojes', NULL, 'El Paraíso', '111-111-0022', '222-222-0022', 'O+', 1, 'Español', 'milk|peanuts|walnuts|gluten|fish|shellfish', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(23, 1, 'PT-GEN-000023', '0601-0409-00023', 'FAM000005', 'Marcos', NULL, 'Cesario', 'I', 'M', '2003-07-29 00:00:00', '718 Avenida El Gramal', 'Apt. 257', 'Barrio El Porvenir', 'Choluteca', NULL, 'Choluteca', '111-111-0023', '222-222-0023', 'B+', 1, 'Español', 'penicillin|tetracycline|aspirin|atracurium|vecuronium', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(24, 1, 'PT-GEN-000024', '0801-0818-00024', 'FAM000005', 'Gaitán', 'Merino', 'Inalén', 'H', 'F', '2016-10-27 00:00:00', '484 Avenida El Duende', 'Apt. 880', 'Col. 30 De Noviembre', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0024', NULL, 'O+', 1, 'Español', 'penicillin|ibuprofen|naproxen|aspirin|atracurium', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(25, 1, 'PT-GEN-000025', '0708-0001-00025', 'FAM000006', 'Gracia', 'Marroquín', 'Abram', 'Y', 'M', '2007-10-19 00:00:00', '377 Calle Seguale', NULL, 'Morocelí', 'Morocelí', NULL, 'El Paraíso', '111-111-0025', '222-222-0025', 'O+', 1, 'Español', 'penicillin|ibuprofen|sulfa|insulin|atracurium|vecuronium|milk|eggs|walnuts|fish|shellfish', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(26, 1, 'PT-GEN-000026', '0501-0407-00026', 'FAM000006', 'Ramírez', 'Cedillo', 'Alda', 'J', 'F', '1961-10-15 00:00:00', '197 Calle Cansopo', 'Apt. 98', 'Aldea El Carmen', 'San Pedro Sula', NULL, 'Cortés', '111-111-0026', '222-222-0026', 'O+', 0, 'Español', 'tetracycline|naproxen|atracurium|eggs|soy|gluten|fish', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(27, 1, 'PT-GEN-000027', '0301-0001-00027', 'FAM000006', 'Sanches', NULL, 'Asdrúbal', 'F', 'M', '2011-11-19 00:00:00', '431 Avenida El Baiz', 'Apt. 870', 'Comayagua', 'Comayagua', NULL, 'Comayagua', '111-111-0027', NULL, 'A-', 1, 'Español', 'tetracycline|insulin|vecuronium', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(28, 1, 'PT-GEN-000028', '0506-0004-00028', 'FAM000006', 'Razo', 'Fuentes', 'Francesc', 'M', 'M', '1999-04-30 00:00:00', '780 Calle Pandorga', 'Apt. 628', 'Baracoa', 'Puerto Cortés', NULL, 'Cortés', '111-111-0028', '222-222-0028', 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(29, 1, 'PT-GEN-000029', '0607-0002-00029', 'FAM000006', 'Reséndez', 'Delgado', 'Natanael', 'W', 'M', '2017-05-21 00:00:00', '123 Calle Boquitas', 'Apt. 750', 'Cedeño', 'Marcovia', NULL, 'Choluteca', '111-111-0029', '222-222-0029', 'O+', 0, 'Español', 'milk|walnuts|gluten|fish|shellfish', NULL, '2018-05-19 21:01:59', '2018-05-19 17:01:59'),
(30, 1, 'PT-GEN-000030', '1503-0001-00030', 'FAM000006', 'Valdés', 'Guerra', 'Danny', 'Á', 'M', '2008-09-20 00:00:00', '484 Calle El Llano', 'Apt. 683', 'Catacamas', 'Catacamas', NULL, 'Olancho', '111-111-0030', '222-222-0030', 'A+', 1, 'Español', 'penicillin|tetracycline|ibuprofen|naproxen|sulfa|insulin|eggs|soy|gluten|fish|shellfish', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(31, 1, 'PT-GEN-000031', '0506-0001-00031', 'FAM000006', 'Camacho', NULL, 'Verena', 'Q', 'F', '2000-07-12 00:00:00', '863 Avenida Cacala', 'Apt. 345', 'Puerto Cortés', 'Puerto Cortés', NULL, 'Cortés', '111-111-0031', NULL, 'B+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(32, 1, 'PT-GEN-000032', '0703-0036-00032', 'FAM000007', 'Mata', 'Ponce', 'Alucio', 'L', 'M', '1984-12-28 00:00:00', '335 Calle El Pipero', NULL, 'Santa María', 'Danlí', NULL, 'El Paraíso', '111-111-0032', '222-222-0032', 'B+', 0, 'Español', 'amoxicillin|tetracycline|ibuprofen|vecuronium|milk|peanuts|soy|gluten|shellfish', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(33, 1, 'PT-GEN-000033', '0601-0407-00033', 'FAM000007', 'Saucedo', NULL, 'Auxiliadora', 'Á', 'F', '1965-09-23 00:00:00', '947 Calle Guajire', 'Apt. 972', 'Barrio El Estruendo', 'Choluteca', NULL, 'Choluteca', '111-111-0033', NULL, 'O-', 0, 'Español', 'milk|eggs|walnuts', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(34, 1, 'PT-GEN-000034', '0609-0002-00034', 'FAM000007', 'Limón', 'Regalado', 'Argenta', 'Á', 'F', '1998-03-27 00:00:00', '624 Avenida Cabreras', 'Apt. 970', 'San Bernardo', 'Namasigue', NULL, 'Choluteca', '111-111-0034', '222-222-0034', 'A+', 0, 'Español', 'naproxen|sulfa|insulin|aspirin|walnuts|fish', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(35, 1, 'PT-GEN-000035', '0501-0262-00035', 'FAM000007', 'Fernández', NULL, 'Gladys', 'W', 'F', '2013-05-16 00:00:00', '477 Avenida El Zate', NULL, 'Barrio Barandilla', 'San Pedro Sula', NULL, 'Cortés', '111-111-0035', NULL, 'O+', 1, 'Español', 'insulin|aspirin|milk|eggs|gluten|fish|shellfish', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(36, 1, 'PT-GEN-000036', '0814-0001-00036', 'FAM000007', 'Salas', 'Molina', 'Zofía', 'L', 'F', '1981-08-06 00:00:00', '550 Calle Miantago', 'Apt. 910', 'Orica', 'Orica', NULL, 'Francisco Morazán', '111-111-0036', '222-222-0036', 'AB+', 0, 'Español', 'milk|shellfish', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(37, 1, 'PT-GEN-000037', '0801-0008-00037', 'FAM000007', 'Ornelas', 'Pedraza', 'Addison', 'Ñ', 'M', '1995-10-21 00:00:00', '775 Calle Barrios', NULL, 'Cofradía', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0037', NULL, 'A+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(38, 1, 'PT-GEN-000038', '0616-0001-00038', 'FAM000007', 'Rendón', NULL, 'Giraldo', 'M', 'M', '1998-04-05 00:00:00', '922 Calle Rus-Rus', 'Apt. 118', 'Santa Ana de Yusguare', 'Santa Ana de Yusguar', NULL, 'Choluteca', '111-111-0038', NULL, 'O+', 1, 'Español', 'gluten|fish|shellfish', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(39, 1, 'PT-GEN-000039', '0502-0034-00039', 'FAM000007', 'Becerra', NULL, 'Lalita', 'T', 'F', '2005-01-09 00:00:00', '641 Avenida Misoco', 'Apt. 876', 'Río Bijao', 'Choloma', NULL, 'Cortés', '111-111-0039', '222-222-0039', 'O+', 0, 'Español', 'penicillin|naproxen|sulfa|aspirin|atracurium|vecuronium', NULL, '2018-05-19 21:02:00', '2018-05-19 17:02:00'),
(40, 1, 'PT-GEN-000040', '0801-0684-00040', 'FAM000007', 'Cantú', 'Paredes', 'Urania', 'Y', 'F', '1982-03-24 00:00:00', '357 Calle Guarita', NULL, 'Col. La Pradera', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0040', '222-222-0040', 'O+', 0, 'Español', 'tetracycline|sulfa|insulin|vecuronium', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(41, 1, 'PT-GEN-000041', '1006-0151-00041', 'FAM000007', 'Partida', 'Valdez', 'Ageo', 'I', 'M', '1989-02-11 00:00:00', '307 Calle Zacateras', 'Apt. 987', 'Barrio Lempira', 'Intibucá', NULL, 'Intibucá', '111-111-0041', '222-222-0041', 'O+', 1, 'Español', 'eggs|soy|gluten|fish|shellfish', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(42, 1, 'PT-GEN-000042', '1003-0006-00042', 'FAM000008', 'Zambrano', NULL, 'Allison', 'L', 'F', '1954-05-15 00:00:00', '948 Calle Guapinol', 'Apt. 906', 'Mal Paso', 'Colomoncagua', NULL, 'Intibucá', '111-111-0042', '222-222-0042', 'A+', 0, 'Español', 'milk|soy|gluten|shellfish', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(43, 1, 'PT-GEN-000043', '0901-0001-00043', 'FAM000008', 'Ojeda', NULL, 'Eldora', 'V', 'F', '1998-10-11 00:00:00', '627 Avenida Rancho F', NULL, 'Puerto Lempira', 'Puerto Lempira', NULL, 'Gracias a Dios', '111-111-0043', NULL, 'O+', 1, 'Español', 'insulin|milk|walnuts|soy|gluten|fish', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(44, 1, 'PT-GEN-000044', '0705-0001-00044', 'FAM000008', 'Nazario', 'Venegas', 'Kapriel', 'E', 'F', '2003-12-17 00:00:00', '570 Avenida Joconte', 'Apt. 80', 'Guinope', 'Guinope', NULL, 'El Paraíso', '111-111-0044', '222-222-0044', 'O+', 0, 'Español', 'tetracycline|gluten|fish|shellfish', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(45, 1, 'PT-GEN-000045', '0306-0001-00045', 'FAM000009', 'Estrada', 'Rendón', 'Oriol', 'K', 'M', '2001-12-06 00:00:00', '107 Calle El Obraje', NULL, 'La Libertad', 'La Libertad', NULL, 'Comayagua', '111-111-0045', NULL, 'B+', 1, 'Español', 'insulin|aspirin|atracurium|vecuronium|milk|eggs|peanuts', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(46, 1, 'PT-GEN-000046', '0502-0131-00046', 'FAM000009', 'Garay', NULL, 'Cuasimodo', 'O', 'M', '2003-02-21 00:00:00', '846 Avenida Kele Kele', 'Apt. 910', 'La Jutosa', 'Choloma', NULL, 'Cortés', '111-111-0046', NULL, 'B+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(47, 1, 'PT-GEN-000047', '1012-0001-00047', 'FAM000009', 'Camarillo', 'Casárez', 'Diva', 'T', 'F', '1981-02-09 00:00:00', '992 Avenida Tiosintal', NULL, 'San Juan', 'San Juan', NULL, 'Intibucá', '111-111-0047', NULL, 'A+', 1, 'Español', 'penicillin|tetracycline|sulfa|vecuronium|milk|eggs|shellfish', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(48, 1, 'PT-GEN-000048', '0801-0823-00048', 'FAM000009', 'Cotto', NULL, 'Donina', 'A', 'F', '2002-11-08 00:00:00', '427 Calle Cacaulito', NULL, 'Col. 28 De Marzo', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0048', '222-222-0048', 'O+', 1, 'Español', 'amoxicillin|tetracycline|atracurium|vecuronium', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(49, 1, 'PT-GEN-000049', '0511-0015-00049', 'FAM000009', 'Bonilla', 'Menéndez', 'Melisa', 'Á', 'F', '1990-12-26 00:00:00', '479 Calle Cocobila', 'Apt. 250', 'Nuevo Chamelecón', 'Villanueva', NULL, 'Cortés', '111-111-0049', NULL, 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(50, 1, 'PT-GEN-000050', '1804-0288-00050', 'FAM000009', 'Cerda', NULL, 'Oswald', 'R', 'M', '1994-05-22 00:00:00', '638 Avenida Higuerito', NULL, 'Col. Corocol', 'El Progreso', NULL, 'Yoro', '111-111-0050', NULL, 'O+', 1, 'Español', 'penicillin|tetracycline|naproxen|insulin|atracurium', NULL, '2018-05-19 21:02:01', '2018-05-19 17:02:01'),
(51, 1, 'PT-GEN-000051', '0303-0011-00051', 'FAM000009', 'Badillo', NULL, 'Aramis', 'F', 'M', '2014-07-28 00:00:00', '897 Calle El Planon', NULL, 'San Francisco de Loma Larga', 'El Rosario', NULL, 'Comayagua', '111-111-0051', NULL, 'O+', 0, 'Español', 'milk|eggs|peanuts|fish', NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(52, 1, 'PT-GEN-000052', '1612-0070-00052', 'FAM000009', 'León', 'Velez', 'Loreto', 'X', 'M', '1964-06-04 00:00:00', '143 Calle El Higo', NULL, 'El Ciruelo', 'Macuelizo', NULL, 'Santa Bárbara', '111-111-0052', NULL, 'O+', 1, 'Español', 'sulfa|insulin|milk|eggs|peanuts|walnuts|soy|shellfish', NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(53, 1, 'PT-GEN-000053', '0801-0802-00053', 'FAM000009', 'Quintero', 'Gracia', 'Lahual', 'N', 'M', '1990-01-11 00:00:00', '544 Avenida El Metal', 'Apt. 522', 'Col. San Miguel', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0053', NULL, 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(54, 1, 'PT-GEN-000054', '1413-0001-00054', 'FAM000010', 'Granado', 'Segovia', 'Lazzaro', 'C', 'M', '1977-06-04 00:00:00', '484 Avenida Copén', NULL, 'San Marcos', 'San Marcos', NULL, 'Ocotepeque', '111-111-0054', '222-222-0054', 'O+', 0, 'Español', 'ibuprofen|peanuts|soy|gluten|fish', NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(55, 1, 'PT-GEN-000055', '0715-0001-00055', 'FAM000010', 'Vergara', 'Monroy', 'Alcuino', 'N', 'M', '2000-01-26 00:00:00', '944 Avenida Los Bu', 'Apt. 449', 'Teupasenti', 'Teupasenti', NULL, 'El Paraíso', '111-111-0055', '222-222-0055', 'A+', 0, 'Español', 'tetracycline|naproxen|sulfa|insulin|vecuronium|soy|gluten|shellfish', NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(56, 1, 'PT-GEN-000056', '0801-0834-00056', 'FAM000010', 'Delgado', 'Perea', 'Suyai', 'B', 'M', '1964-01-25 00:00:00', '140 Avenida Rauteca', NULL, 'Col. Villa Nueva Sur', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0056', NULL, 'O+', 1, 'Español', 'amoxicillin|tetracycline|ibuprofen|naproxen|sulfa|insulin', NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(57, 1, 'PT-GEN-000057', '0201-0003-00057', 'FAM000010', 'Madrid', NULL, 'Ginette', 'V', 'F', '2001-12-19 00:00:00', '831 Avenida Tikua', 'Apt. 187', 'Chapagua', 'Trujillo', NULL, 'Colón', '111-111-0057', '222-222-0057', 'B+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(58, 1, 'PT-GEN-000058', '0101-0150-00058', 'FAM000011', 'Ceja', NULL, 'Nicole', 'S', 'F', '1997-08-25 00:00:00', '138 Calle El Desvio', 'Apt. 383', 'Col. Irías Navas', 'La Ceiba', NULL, 'Atlántida', '111-111-0058', '222-222-0058', 'O-', 1, 'Español', NULL, NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(59, 1, 'PT-GEN-000059', '0801-0513-00059', 'FAM000011', 'Madrigal', 'Zaragoza', 'Antipas', 'C', 'M', '2017-05-18 00:00:00', '902 Calle Ciriboya', NULL, 'Bo. El Reparto', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0059', NULL, 'O+', 0, 'Español', 'penicillin|aspirin|atracurium', NULL, '2018-05-19 21:02:02', '2018-05-19 17:02:02'),
(60, 1, 'PT-GEN-000060', '1807-0468-00060', 'FAM000011', 'Marrero', NULL, 'Beatrice', 'X', 'F', '1978-09-09 00:00:00', '490 Calle Piedras', NULL, 'Col. La Libertad', 'Olanchito', NULL, 'Yoro', '111-111-0060', NULL, 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(61, 1, 'PT-GEN-000061', '0101-0166-00061', 'FAM000011', 'Ramón', 'Cazares', 'Amelio', 'B', 'M', '2007-11-13 00:00:00', '825 Avenida Guillén', NULL, 'Col. Miramar', 'La Ceiba', NULL, 'Atlántida', '111-111-0061', '222-222-0061', 'A+', 0, 'Español', 'amoxicillin|naproxen|sulfa|vecuronium', NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(62, 1, 'PT-GEN-000062', '0205-0001-00062', 'FAM000011', 'Duran', 'Casanova', 'Valente', 'F', 'M', '1987-06-16 00:00:00', '807 Calle Tarbuska', NULL, 'Sabá', 'Sabá', NULL, 'Colón', '111-111-0062', '222-222-0062', 'O+', 1, 'Español', 'amoxicillin|penicillin|tetracycline|ibuprofen|sulfa|aspirin|vecuronium', NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(63, 1, 'PT-GEN-000063', '0801-0030-00063', 'FAM000011', 'Rojo', 'Mata', 'Baldovino', 'A', 'M', '2001-04-13 00:00:00', '169 Avenida Raukiamp', 'Apt. 440', 'Río Abajo', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0063', '222-222-0063', 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(64, 1, 'PT-GEN-000064', '0511-0245-00064', 'FAM000012', 'Carrión', 'Cotto', 'Eliecer', 'B', 'M', '2010-09-13 00:00:00', '824 Avenida El Pague', NULL, 'Barrio La Victoria', 'Villanueva', NULL, 'Cortés', '111-111-0064', '222-222-0064', 'O+', 1, 'Español', 'eggs|peanuts|walnuts|gluten|fish|shellfish', NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(65, 1, 'PT-GEN-000065', '0318-0129-00065', 'FAM000012', 'Cabrera', 'Sevilla', 'Venancia', 'A', 'F', '1962-05-15 00:00:00', '642 Calle Peralta', 'Apt. 387', 'Barrio El Carmen', 'Siguatepeque', NULL, 'Comayagua', '111-111-0065', '222-222-0065', 'O+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(66, 1, 'PT-GEN-000066', '0606-0011-00066', 'FAM000012', 'Carrasco', 'Tijerina', 'Nicole', 'S', 'F', '2008-05-08 00:00:00', '830 Calle El Gramal', 'Apt. 352', 'Santa Teresa Arriba', 'El Triunfo', NULL, 'Choluteca', '111-111-0066', NULL, 'O-', 0, 'Español', 'penicillin|tetracycline|ibuprofen|sulfa|insulin|atracurium', NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(67, 1, 'PT-GEN-000067', '1807-0016-00067', 'FAM000012', 'Arredondo', 'Montoya', 'Alphonse', 'S', 'M', '1998-03-28 00:00:00', '473 Calle Manacal', 'Apt. 771', 'Campo Nerones', 'Olanchito', NULL, 'Yoro', '111-111-0067', '222-222-0067', 'AB+', 1, 'Español', 'amoxicillin|atracurium', NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(68, 1, 'PT-GEN-000068', '0801-0843-00068', 'FAM000012', 'Grijalva', NULL, 'Isabel', 'X', 'F', '1964-12-16 00:00:00', '406 Calle El Ocoton', NULL, 'Aldea La Travesía', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0068', '222-222-0068', 'A+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(69, 1, 'PT-GEN-000069', '0301-0031-00069', 'FAM000012', 'Arenas', 'Pantoja', 'Eliecer', 'N', 'M', '1964-08-29 00:00:00', '333 Avenida Cielito', 'Apt. 941', 'Palo Pintado', 'Comayagua', NULL, 'Comayagua', '111-111-0069', '222-222-0069', 'A+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:03', '2018-05-19 17:02:03'),
(70, 1, 'PT-GEN-000070', '0603-0001-00070', 'FAM000012', 'Valladares', NULL, 'Osmán', 'F', 'M', '1989-12-22 00:00:00', '474 Calle Jilguete', 'Apt. 786', 'Concepción de María', 'Concepción de Maria', NULL, 'Choluteca', '111-111-0070', '222-222-0070', 'O+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(71, 1, 'PT-GEN-000071', '1301-0001-00071', 'FAM000013', 'Banda', 'Godoy', 'Manlio', 'Q', 'M', '1982-10-18 00:00:00', '834 Avenida Mud Hole', 'Apt. 353', 'Gracias', 'Gracias', NULL, 'Lempira', '111-111-0071', '222-222-0071', 'O+', 0, 'Español', 'penicillin|tetracycline|ibuprofen|naproxen|atracurium|peanuts|walnuts|soy|fish', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(72, 1, 'PT-GEN-000072', '0801-0952-00072', 'FAM000013', 'Armenta', 'Prado', 'Elisandro', 'G', 'M', '2003-03-31 00:00:00', '303 Avenida Ocomán', NULL, 'Col. Residencial Plaza', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0072', NULL, 'A+', 0, 'Español', 'ibuprofen|insulin|atracurium|vecuronium|peanuts|fish', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(73, 1, 'PT-GEN-000073', '0801-0661-00073', 'FAM000013', 'Mares', 'Loera', 'Liborio', 'L', 'M', '2004-08-23 00:00:00', '554 Avenida Gualoma', 'Apt. 202', 'Col. Izaguirre', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0073', '222-222-0073', 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(74, 1, 'PT-GEN-000074', '0304-0003-00074', 'FAM000013', 'Porras', NULL, 'Artemisa', 'W', 'F', '1994-01-04 00:00:00', '470 Avenida Jalán', 'Apt. 389', 'El Playón', 'Esquías', NULL, 'Comayagua', '111-111-0074', NULL, 'A+', 0, 'Español', 'peanuts|gluten|fish', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(75, 1, 'PT-GEN-000075', '0504-0016-00075', 'FAM000013', 'Arce', 'Ayala', 'León', 'U', 'M', '2011-03-24 00:00:00', '788 Avenida Ulasala', NULL, 'Santiago', 'Pimienta', NULL, 'Cortés', '111-111-0075', '222-222-0075', 'A+', 0, 'Español', 'ibuprofen|sulfa|insulin|aspirin|vecuronium', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(76, 1, 'PT-GEN-000076', '1806-0024-00076', 'FAM000013', 'Bernal', NULL, 'Kimberly', 'Ñ', 'F', '1981-08-17 00:00:00', '234 Calle Urrutia', 'Apt. 992', 'San Juan de Camalote', 'Morazán', NULL, 'Yoro', '111-111-0076', NULL, 'O+', 1, 'Español', 'penicillin|naproxen|insulin|aspirin|atracurium|vecuronium', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(77, 1, 'PT-GEN-000077', '0506-0004-00077', 'FAM000013', 'Ochoa', 'Magana', 'Felicidad', 'Y', 'F', '1980-01-12 00:00:00', '764 Calle Chancaya', NULL, 'Baracoa', 'Puerto Cortés', NULL, 'Cortés', '111-111-0077', '222-222-0077', 'O+', 0, 'Español', 'amoxicillin|ibuprofen|sulfa|atracurium|vecuronium', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(78, 1, 'PT-GEN-000078', '0319-0002-00078', 'FAM000013', 'López', 'Leal', 'Emanuel', 'I', 'M', '1965-12-23 00:00:00', '622 Avenida El Lagero', 'Apt. 362', 'Flores', 'Villa de San Antonio', NULL, 'Comayagua', '111-111-0078', NULL, 'O+', 0, 'Español', 'amoxicillin|penicillin|naproxen|atracurium|vecuronium', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(79, 1, 'PT-GEN-000079', '0106-0010-00079', 'FAM000014', 'López', NULL, 'Marga', 'U', 'F', '1978-03-14 00:00:00', '591 Avenida Jaguas', 'Apt. 278', 'Santa Ana', 'San Francisco', NULL, 'Atlántida', '111-111-0079', NULL, 'O+', 0, 'Español', 'tetracycline|ibuprofen|naproxen|sulfa|aspirin|atracurium|milk|eggs|peanuts|walnuts|fish|shellfish', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(80, 1, 'PT-GEN-000080', '0512-0058-00080', 'FAM000014', 'Calderón', 'Guerrero', 'Hildegunda', 'C', 'F', '1995-08-24 00:00:00', '993 Avenida El Jutal', 'Apt. 953', 'Col. Alvarez Martínez', 'La Lima', NULL, 'Cortés', '111-111-0080', '222-222-0080', 'O+', 1, 'Español', 'milk|walnuts', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(81, 1, 'PT-GEN-000081', '0502-0298-00081', 'FAM000015', 'Castellanos', 'Paredes', 'Emilio', 'Q', 'M', '1992-04-04 00:00:00', '319 Avenida El Jerico', NULL, 'Col. López Arellano', 'Choloma', NULL, 'Cortés', '111-111-0081', NULL, 'A+', 0, 'Español', 'penicillin|sulfa|aspirin|vecuronium', NULL, '2018-05-19 21:02:04', '2018-05-19 17:02:04'),
(82, 1, 'PT-GEN-000082', '0801-0802-00082', 'FAM000015', 'Godínez', 'Menéndez', 'Albana', 'J', 'F', '2011-01-31 00:00:00', '146 Avenida Gracias', NULL, 'Col. San Miguel', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0082', NULL, 'O+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(83, 1, 'PT-GEN-000083', '1801-0018-00083', 'FAM000015', 'Soria', 'Linares', 'Eurídice', 'S', 'F', '2000-05-22 00:00:00', '204 Calle Cocobila', NULL, 'Subirana', 'Yoro', NULL, 'Yoro', '111-111-0083', NULL, 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(84, 1, 'PT-GEN-000084', '1804-0313-00084', 'FAM000015', 'Cepeda', 'Nevarez', 'Fergus', 'D', 'M', '1933-05-19 00:00:00', '729 Calle Condega', NULL, 'Col. Palermo', 'El Progreso', NULL, 'Yoro', '111-111-0084', NULL, 'A+', 0, 'Español', 'milk|eggs|peanuts|soy|fish', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(85, 1, 'PT-GEN-000085', '0801-0642-00085', 'FAM000015', 'Mascarenas', NULL, 'Jesabel', 'F', 'F', '1980-10-04 00:00:00', '846 Calle Solo Una', NULL, 'Col. Flor No.1', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0085', NULL, 'O+', 0, 'Español', 'amoxicillin|ibuprofen|naproxen|sulfa|vecuronium', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(86, 1, 'PT-GEN-000086', '1520-0001-00086', 'FAM000016', 'Ramos', NULL, 'Laertes', 'P', 'M', '2014-06-27 00:00:00', '490 Avenida Barracón', 'Apt. 659', 'Santa María del Real', 'Santa María del Real', NULL, 'Olancho', '111-111-0086', '222-222-0086', 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(87, 1, 'PT-GEN-000087', '1801-0009-00087', 'FAM000016', 'Ferrer', 'Castro', 'Elio', 'I', 'M', '2001-09-17 00:00:00', '313 Avenida El Paujil', 'Apt. 243', 'La Rosa', 'Yoro', NULL, 'Yoro', '111-111-0087', NULL, 'B+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(88, 1, 'PT-GEN-000088', '0824-0001-00088', 'FAM000016', 'Samaniego', 'Armenta', 'Patsy', 'B', 'F', '2018-08-25 00:00:00', '190 Avenida Mirajoco', NULL, 'Talanga', 'Talanga', NULL, 'Francisco Morazán', '111-111-0088', '222-222-0088', 'A+', 0, 'Español', 'penicillin|insulin|aspirin|vecuronium', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(89, 1, 'PT-GEN-000089', '0828-0001-00089', 'FAM000016', 'Montano', 'Linares', 'Orfeo', 'G', 'M', '1977-10-11 00:00:00', '974 Avenida Puswaya', NULL, 'Vallecillo', 'Vallecillo', NULL, 'Francisco Morazán', '111-111-0089', '222-222-0089', 'A+', 0, 'Español', 'amoxicillin|penicillin|ibuprofen|vecuronium', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(90, 1, 'PT-GEN-000090', '0606-0011-00090', 'FAM000016', 'Garibay', 'Alarcón', 'Hilario', 'M', 'M', '1996-07-05 00:00:00', '550 Avenida El Rancho', 'Apt. 235', 'Santa Teresa Arriba', 'El Triunfo', NULL, 'Choluteca', '111-111-0090', '222-222-0090', 'O+', 1, 'Español', 'amoxicillin|ibuprofen|naproxen|sulfa|insulin|aspirin', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(91, 1, 'PT-GEN-000091', '1501-0001-00091', 'FAM000016', 'Heredia', NULL, 'Malvina', 'B', 'F', '1995-09-17 00:00:00', '234 Avenida Los Cocos', 'Apt. 915', 'Juticalpa', 'Juticalpa', NULL, 'Olancho', '111-111-0091', NULL, 'A+', 1, 'Español', 'milk|eggs|gluten', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(92, 1, 'PT-GEN-000092', '0311-0121-00092', 'FAM000017', 'Pabón', 'Figueroa', 'Calfucir', 'M', 'M', '2015-06-13 00:00:00', '471 Calle San Alejo', 'Apt. 776', 'Ignorado', 'Minas de Oro', NULL, 'Comayagua', '111-111-0092', '222-222-0092', 'O+', 1, 'Español', 'amoxicillin|ibuprofen|sulfa|atracurium|vecuronium', NULL, '2018-05-19 21:02:05', '2018-05-19 17:02:05'),
(93, 1, 'PT-GEN-000093', '0801-0022-00093', 'FAM000017', 'Trejo', 'Rubio', 'Alaor', 'S', 'M', '1966-03-29 00:00:00', '697 Avenida Paletales', NULL, 'La Venta', 'Distrito Central', NULL, 'Francisco Morazán', '111-111-0093', NULL, 'O+', 1, 'Español', 'peanuts|walnuts|shellfish', NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(94, 1, 'PT-GEN-000094', '0603-0001-00094', 'FAM000017', 'Rendón', 'Archuleta', 'Roberta', 'W', 'F', '2000-09-17 00:00:00', '465 Avenida Sosoa', NULL, 'Concepción de María', 'Concepción de Maria', NULL, 'Choluteca', '111-111-0094', NULL, 'O+', 0, 'Español', 'ibuprofen|naproxen|insulin|atracurium|peanuts|soy|fish|shellfish', NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(95, 1, 'PT-GEN-000095', '0510-0317-00095', 'FAM000017', 'Malave', NULL, 'Addison', 'E', 'M', '1995-12-23 00:00:00', '349 Calle Quetera', 'Apt. 206', 'Yojoa', 'Santa Cruz de Yojoa', NULL, 'Cortés', '111-111-0095', NULL, 'B+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(96, 1, 'PT-GEN-000096', '0502-0001-00096', 'FAM000017', 'Villalobos', NULL, 'Lily', 'Á', 'F', '1940-04-06 00:00:00', '225 Calle Piladeros', NULL, 'Choloma', 'Choloma', NULL, 'Cortés', '111-111-0096', NULL, 'O+', 1, 'Español', NULL, NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(97, 1, 'PT-GEN-000097', '1505-0015-00097', 'FAM000017', 'Marín', 'Ordóñez', 'Lenora', 'U', 'F', '2015-01-28 00:00:00', '444 Calle El Pinito', NULL, 'Las Marías', 'Dulce Nombre de Cul', NULL, 'Olancho', '111-111-0097', NULL, 'A+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(98, 1, 'PT-GEN-000098', '1801-0012-00098', 'FAM000017', 'Arredondo', 'Solórzano', 'Yulan', 'T', 'M', '2013-10-10 00:00:00', '161 Avenida Klubki', 'Apt. 971', 'Locomapa No.1', 'Yoro', NULL, 'Yoro', '111-111-0098', '222-222-0098', 'O+', 0, 'Español', 'amoxicillin|penicillin|tetracycline|ibuprofen|sulfa|insulin|atracurium|peanuts|walnuts|soy|fish', NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(99, 1, 'PT-GEN-000099', '0511-0006-00099', 'FAM000018', 'Preciado', 'Benítez', 'Adalrico', 'X', 'M', '2018-11-29 00:00:00', '922 Avenida Catrinti', 'Apt. 857', 'El Marañón', 'Villanueva', NULL, 'Cortés', '111-111-0099', NULL, 'O+', 1, 'Español', 'amoxicillin|tetracycline|insulin|aspirin|atracurium|vecuronium', NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06'),
(100, 1, 'PT-GEN-000100', '1709-0074-00100', 'FAM000018', 'Argüello', NULL, 'Josué', 'J', 'M', '2017-04-28 00:00:00', '362 Calle El Llano', NULL, 'Col. Morazan', 'San Lorenzo', NULL, 'Valle', '111-111-0100', NULL, 'O+', 0, 'Español', NULL, NULL, '2018-05-19 21:02:06', '2018-05-19 17:02:06');

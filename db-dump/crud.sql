CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `student` (`id`, `name`, `father_name`, `email`, `phone`) VALUES
(1, 'fahad', 'rashid ahmed', 'faad', '323232'),
(2, 'fahad', 'rashid ahmed', 'faad', '323232'),
(13, 'fahad', 'rashid ahmed', 'faad', '323232'),
(14, 'tahir', 'kah', 'tahir@gmail.com', '01837839393');

ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

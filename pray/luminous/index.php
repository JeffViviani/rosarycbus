<?php
  $rotation_duration = 7.0;
  include '../epoc.php';
?>
<!DOCTYPE html>
	<head>
		<title>Luminous Mysteries</title>
		<link rel='stylesheet' type='text/css' href='../../style/stylesheet.css?v=1.4' />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
		<script type="text/javascript" src="../../js/script.js?v=1.6"></script>
		<link rel="icon" type="image/x-icon" href="../../Images/Cross.ico"/>
	</head>
	<body>
		<img id='background-image' src="../../Images/Humble Road.jpg" />
		<div class='div-top-banner'>
			<div id='banner-title'>ROSARY CBUS</div>
			<div>
				<div class='clickable'><a href="../../index.html">HOME</a></div>
				<div class='clickable'><a href="../../pray/index.html">PRAY</a></div>
				<div class='clickable'>FAQ</div>
				<div class='clickable'>NOT-SO-FAQ</div>
			</div>
			<img src="../../Images/crucifix.png" style="height:5em;"/>
		</div>
		<div class='full-page-box'>
			<div id="left-margin"></div>
			<div id="main-content">
				<a href="../sorrowful/index.php"><div class='bar-1 grey-bar bcm-red-bar'></div></a>
				<a href="../glorious/index.php"><div class='bar-2 grey-bar bcm-green-bar'></div></a>
				<a href="../luminous/index.php"><div class='bar-3 orange-bar'></div></a>
				<a href="../joyful/index.php"><div class='bar-4 grey-bar bcm-blue-bar'></div></a>
				<center><h2 class='big-pretty-text'>The Luminous Mysteries</h2></center>
				
				<center><p style="margin-bottom:0">Occasion:</p></center>
				<center>
					<select name="occasion" id="occasion-select">
						<option value="ord">Ordinary</option>
						<option value="cel">Celebratory</option>
					</select>
				</center>
				
				<center><p style="margin-bottom:0;margin-top:0;">Meditation Style:</p></center>
				<center>
					<select name="medstyle" id="medstyle-select">
					<option value="suc">Succinct</option>
						<option value="dis">Distinct</option>
						<option value="intb">Integrated Brief</option>
						<option value="intf">Integrated Full</option>
					</select>
				</center>
				
				<center><p style="margin-bottom:0;margin-top:0;">Please Select Translation:</p></center>
				<center>
					<select name="translation" id="translation-select">
						<option value="nab">New American Bible (RE)</option>
						<option value="dr">Douay-Rheims</option>
					</select>
				</center>
				
				<center><p>Use the below buttons to expand or minimize the different parts of the prayer.</p></center>

				<div class="section-btn">Opening</div>
				<div class="expandable-box">
					<b><p class='guide'>[Sign of the Cross]</p></b>
					<p><span class="red">In the name of the Father, and of the Son, and of the Holy Spirit. Amen.</span></p>
					<div class="cel">
						<p class='guide'>[Fatima Opening Prayer]</p>
						<p>Queen of the Holy Rosary, you have deigned to come to Fatima to reveal to the three shephard children the treasures of grace hidden in this rosary. Inspire our hearts with a sincere love of this devotion, in order that by meditating on the mysteries of our redemption which are recalled in it, we may be enriched with its fruits, obtain peace for the world, the conversion of sinners and of Russia, and the favor of which we ask you in this rosary.</p>
						<p>We pray for the intentions of the Church, those of the Sacred Heart of Jesus, the Immaculate Heart of Mary, the Chaste Heart of Joseph, and those intentions we now lift up silently.</p>
						<p class='guide'>[Period of silence]</p>
						<p>We ask it for the greater glory of God, for your own honor, and for the good of all souls, especially our own.</p>
					</div>
					<div class="ord">
						<p class='guide'>[Prayer Intentions]</p>
						<p>A moment of silence for our prayer intentions...</p>
					</div>
					<p class='guide'>[Apostles Creed]</p>
					<p>I believe in God, the Father Almighty, Creator of Heaven and Earth. And in Jesus Christ His only son, Our Lord. Who was conceived by the Holy Spirit, born of the Virgin Mary, suffered under Pontius Pilate, was crucified, died, and was buried. He descended into Hell. On the third day he rose again from the dead. He ascended into Heaven and is seated at the right hand of God the Father Almighty. From there He will come to judge the living and the dead. <span class="red">I believe in the Holy Spirit, the Holy Catholic Church, the communion of saints, the forgiveness of sins, the resurrection of the body, and life everlasting. Amen.</span></p>
					<p class='guide'>[Our Father]</p>
					<p>Our Father, who art in Heaven, hallowed be thy name. Thy kingdom come. Thy will be done. On earth as it is in Heaven. <span class="red">Give us this day our daily bread, and forgive us our trespasses. As we forgive those who trespass against us. And lead us not into temptation; but deliver us from evil. Amen.</span></p>
					<p class='guide'>[Declaration of the Theological Virtues]</p>
					<p>For an increase in faith, hope, and love.</p>
					<p class='guide'>[3X Hail Mary's]</p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p class='guide'>[Glory Be]</p>
					<p>Glory be to the Father, and to the Son, and to the Holy Spirit. <span class="red">As it was in the beginning, is now and ever shall be. World without end. Amen.</span></p>
				</div>

				<div class="section-btn">First Luminous Mystery</div>
				<div class="expandable-box">
					<center><b><p class='guide'>[First Luminous Mystery]</p></b>
					<p>The First Luminous Mystery: The Baptism of Our Lord Jesus Christ.</p></center>
					<div class='rotation-readings'>
						<?php echo getScripture('passages/1/1/', $weeksSinceEpoc); ?>
					</div>
					<div class='rotation-readings'>
						<?php echo getScripture('passages/1/2/', $weeksSinceEpoc); ?>
					</div>
					<center><p class='guide'>[Fruit of the Mystery]</p>
					<p>Fruit of the Mystery: Openness to the Holy Spirit</p></center>
					<p class='guide'>[Our Father]</p>
					<p>Our Father, who art in Heaven, hallowed be Thy name. Thy kingdom come, Thy will be done, on Earth as it is in Heaven. <span class="red">Give us this day our daily bread, and forgive us our trespasses as we forgive those who trespass against us. And lead us not into temptation, but deliver us from evil. Amen.</span></p>
					<p class='guide'>[10X Hail Mary's]</p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p class='guide'>[Glory Be]</p>
					<p>Glory be to the Father, and to the Son, and to the Holy Spirit. <span class="red">As it was in the beginning, is now and ever shall be. World without end. Amen.</span></p>
					<p class='guide'>[Fatima Prayer]</p>
					<p>O My Jesus, <span class="red">forgive us our sins. Save us from the fires of Hell. Lead all souls to Heaven, especially those in most need of Thy mercy.</span></p>
				</div>

				<div class="section-btn">Second Luminous Mystery</div>
				<div class="expandable-box">
					<center><b><p class='guide'>[Second Luminous Mystery]</p></b>
					<p>The Second Luminous Mystery: The Wedding Feast at Cana</p></center>
					<div class="rotation-readings">
						<?php echo getScripture('passages/2/1/', $weeksSinceEpoc); ?>
					</div>
					<div class="rotation-readings">
						<?php echo getScripture('passages/2/2/', $weeksSinceEpoc); ?>
					</div>
					<center><p class='guide'>[Fruit of the Mystery]</p>
					<p>Fruit of the Mystery: To Jesus through Mary</p></center>
					<p class='guide'>[Our Father]</p>
					<p>Our Father, Who art in Heaven, hallowed be Thy name. Thy kingdom come, Thy will be done, on Earth as it is in Heaven. <span class="red">Give us this day our daily bread, and forgive us our trespasses as we forgive those who trespass against us. And leas us not into temptation, but deliver us from evil. Amen.</span></p>
					<p class='guide'>[10X Hail Mary's]</p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p class='guide'>[Glory Be]</p>
					<p>Glory be to the Father, and to the Son, and to the Holy Spirit. <span class="red">As it was in the beginning, is now and ever shall be, world without end. Amen.</span></p>
					<p class='guide'>[Fatima Prayer]</p>
					<p>O My Jesus, <span class="red">forgive us our sins, save us from the fires of Hell, lead all souls to Heaven, especially those in most need of Thy mercy.</span></p>
				</div>

				<div class="section-btn">Third Luminous Mystery</div>
				<div class="expandable-box">
					<center><b><p class='guide'>[Third Luminous Mystery]</p></b>
					<p>The Third Luminous Mystery: The Proclamation of the Kingdom</p></center>
					<div class="rotation-readings">
						<?php echo getScripture('passages/3/1/', $weeksSinceEpoc); ?>
					</div>
					<div class="rotation-readings">
						<?php echo getScripture('passages/3/2/', $weeksSinceEpoc); ?>
					</div>
					<center><p class='guide'>[Fruit of the Mystery]</p>
					<p>Fruit of the Mystery: Repentance and Trust in God</p></center>
					<p class='guide'>[Our Father]</p>
					<p>Our Father, Who art in Heaven. Hallowed be Thy name. Thy kingdom come, Thy will be done, on Earth as it is in Heaven. <span class="red">Give us this day our daily bread, and forgive us our trespasses as we forgive those who trespass against us, and lead us not into temptation, but deliver us from evil. Amen.</span></p>
					<p class='guide'>[10X Hail Mary's]</p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p class='guide'>[Glory Be]</p>
					<p>Glory be to the Father, and to the Son, and to the Holy Spirit. <span class="red">As it was in the beginning, is now and ever shall be. World without end. Amen.</span></p>
					<p class='guide'>[Fatima Prayer]</p>
					<p>O My Jesus, <span class="red">forgive us our sins. Save us from the fires of Hell. Lead all souls to Heaven, especially those in most need of Thy mercy.</span></p>
				</div>

				<div class="section-btn">Fourth Luminous Mystery</div>
				<div class="expandable-box">
					<center><b><p class='guide'>[Fourth Luminous Mystery]</p></b>
					<p>The Fourth Luminous Mystery: The Transfiguration</p></center>
					<div class='rotation-readings'>
						<?php echo getScripture('passages/4/1/', $weeksSinceEpoc); ?>
					</div>
					<div class="rotation-readings">
						<?php echo getScripture('passages/4/2/', $weeksSinceEpoc); ?>
					</div>
					<center><p class='guide'>[Fruit of the Mystery]</p>
					<p>Fruit of the Mystery: Desire for Holiness</p></center>
					<p class='guide'>[Our Father]</p>
					<p>Our Father, Who art in Heaven, hallowed be Thy name. Thy kingdom come, Thy will be done, on Earth as it is in Heaven. <span class="red">Give us this day our daily bread, and forgive us our trespasses as we forgive those who traspass against us. And lead us not into temptation, but deliver us from evil. Amen.</span></p>
					<p class='guide'>[10X Hail Mary's]</p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p class='guide'>[Glory Be]</p>
					<p>Glory be to the Father, and to the Son, and to the Holy Spirit. <span class="red">As it was in the beginning, is now and ever shall be, world without end. Amen.</span></p>
					<p class='guide'>[Fatima Prayer]</p>
					<p>O My Jesus, <span class="red">forgive us our sins. Save us from the fires of Hell. Lead all souls to Heaven, especially those in most need of thy mercy.</span></p>
				</div>

				<div class="section-btn">Fifth Luminous Mystery</div>
				<div class="expandable-box">
					<center><b><p class='guide'>[Fifth Luminous Mystery]</p></b>
					<p>The Fifth Luminous Mystery: The Institution of the Eucharist</p></center>
					<div class="rotation-readings">
						<?php echo getScripture('passages/5/1/', $weeksSinceEpoc); ?>
					</div>
					<div class="rotation-readings">
						<?php echo getScripture('passages/5/2/', $weeksSinceEpoc); ?>
					</div>
					<center><p class='guide'>[Fruit of the Mystery]</p>
					<p>Fruit of the Mystery: Adoration</p></center>
					<p class='guide'>[Our Father]</p>
					<p>Our Father, Who art in Heaven, hallowed be Thy name. Thy kingdom come, Thy will be done. On Earth as it is in Heaven. <span class="red">Give us this day our daily bread, and forgive us our trespasses as we forgive those who trespass against us. And lead us not into temptation, but deliver us from evil. Amen.</span></p>
					<p class='guide'>[10X Hail Mary's]</p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p>Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. <span class="red">Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p class='guide'>[Glory Be]</p>
					<p>Glory be to the Father, and to the Son, and to the Holy Spirit. <span class="red">As it was in the beginning, is now and ever shall be. World without end. Amen.</span></p>
					<p class='guide'>[Fatima Prayer]</p>
					<p>O My Jesus, <span class="red">forgive us our sins, save us from the fires of Hell. Lead all souls to Heaven, especially those in most need of Thy mercy.</span></p>
				</div>

				<div class="section-btn">Closing</div>
				<div class="expandable-box">
					<p class='guide'>[Plenary Indulgence]</p>
					<p>For the Holy Father's intentions and the plenary indulgence, we pray together:</p>
					<p><span class="red">Our Father, who art in Heaven, hallowed be Thy name. Thy kingdom come, Thy will be done, on earth as it is in Heaven. Give us this day our daily bread, and forgive us our trespasses as we forgive those who trespass against us. And lead us not into temptation, but deliver us from evil. Amen.</span></p>
					<p><span class="red">Hail Mary, full of grace, the Lord is with thee. Blessed art thou amongst women, and blessed is the fruit of thy womb, Jesus. Holy Mary, Mother of God, pray for us sinners, now and at the hour of our death. Amen.</span></p>
					<p><span class="red">Glory be to the Father, and to the Son, and to the Holy Spirit. As it was in the beginning, is now and ever shall be. World without end. Amen.</span></p>
					<p class='guide'>[Hail Holy Queen]</p>
					<p><span class="red">Hail Holy Queen, Mother of Mercy, our life, our sweetness, and our hope. To thee do we cry, poor banished children of Eve. To thee do we send up our sighs, mourning and weeping in this valley of tears. Turn then, O most gracious advocate, thine eyes of mercy toward us. And after this our exile, show unto us the blessed fruit of thy womb, Jesus. O clement, O loving, O sweet Virgin Mary, </span>pray for us O Holy Mother of God, <span class="red">that we may be made worthy of the promises of Christ. Amen.</span></p>
					<div class="cel">
						<p class='guide'>[Prayer After the Rosary]</p>
						<p>Let us pray.</p>
						<p><span class="red">O God, whose only begotten Son, by His life, death, and resurrection, has purchased for us the rewards of eternal life, grant we beseech Thee, that by meditating on the mysteries of the most holy rosary of the Blessed Virgin Mary, that we may imitate what they contain, and obtain what they promise, through the same Christ Our Lord. Amen.</span></p>
					</div>
					<p class='guide'>[Prayer to Saint Joseph]</p>
					<p><span class="red">To you, O Blessed Joseph, do we come in our tribulation. And having implored the help of your most holy spouse, we confidently invoke your patronage also. Through that charity which bound you to the Immaculate Virgin Mother of God, and through the paternal love with which you embraced the child Jesus, we humbly beg you graciously to regard the inheritance which Jesus Christ has purchased by his blood, and with your power and strength to aid us in our necessities. O Most watchful guardian of the Holy Family, defend the chosen children of Jesus Christ. O Most Loving Father, ward off from us every contagion of error and corrupting influence. O Our Most Mighty Protector, be kind to us, and from Heaven assist us in our struggle with the power of darkness. As once you rescued the child Jesus from deadly peril, so now protect God's Holy Church from the snares of the enemy and from all adversity. Shield, too, each one of us by your constant protection, so that supported by your example and your aid, we may be able to live piously, to die in holiness, and to obtain eternal happiness in Heaven. Amen.</span></p>
					<div class="cel">
						<p class='guide'>[St. Michael the Archangel Prayer]</p>
						<p><span class="red">Saint Michael the Archangel, defend us in battle. Be our defense against the wickedness and snares of the devil. May God rebuke him we humbly pray, and do thou O Prince of the Heavenly Hosts, by the power of God, thrust into Hell Satan and all the evil spirits, who prowl about the world seeking the ruin of souls. Amen.</span></p>
						<p class='guide'>[Saintly Intercession Invoking]</p>
						<p>All you holy men and women.</p>
						<p><span class="red">Pray for us!</span></p>
					</div>
					<b><p class='guide'>[Sign of the Cross]</p></b>
					<p><span class="red">In the name of the Father, and of the Son, and of the Holy Spirit. Amen.</span></p>
				</div>
			</div>
			<div id="right-margin"></div>
		</div>
		<p id="wse"><?php echo $weeksSinceEpoc ?></p>
	</body>
</html>
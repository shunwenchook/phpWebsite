
<nav>
	<a href="index.php" class="<?= $indexLinkClass ?>"> Home  </a>
	<a href="index.php?action=gallery" class="<?= $galleryLinkClass ?>"> Gallery  </a>
	<a href="index.php?action=shop" class="<?= $shopLinkClass ?>"> Shop  </a>
	<a href="index.php?action=contact_us" class="<?= $contactLinkClass ?>"> Contact Us  </a>


	<?php if($isAdmin) { ?>
	<a href="index.php?action=admin_crud" class="<?= $crudLinkClass ?>" > Admin CRUD </a>
	<?php } ?>

	<?php if ($isAdmin == null && $isLoggedIn){ ?>

	<a href="index.php?action=showUserSettings" class="<?= $userLinkClass ?>" > User Settings</a>
	<?php } ?>

</nav>
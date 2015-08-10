<?php

$installer = $this;
$installer->startSetup();

/* FOOTER LINKS SM*/
$cmsBlock = Mage::getModel('cms/block')->load('footer_links_sm', 'identifier');
$pageContent =<<<EOF
<div class="links social-media">
    <div class="block-title">
        <strong><span>Follow Us</span></strong>
    </div>
    <ul>
        <li><a href="#"><em class="facebook"></em></a></li>
                <li><a href="#"><em class="gplus"></em></a></li>
                <li><a href="#"><em class="linkedin"></em></a></li>
        <li><a href="#"><em class="twitter"></em></a></li>
        <li class="last"><a href="#"><em class="youtube"></em></a></li>
    </ul>
</div>

EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Footer Links SM')->setIdentifier('footer_links_sm');
}

$cmsBlock->setStoreId(0)
->setContent($pageContent)
->setIsActive(1)
->save();

/* FOOTER COMPANY */
$cmsBlock = Mage::getModel('cms/block')->load('footer_company', 'identifier');
$pageContent =<<<EOF
<div class="links">
    <div class="block-title">
        <strong><span>amphenol RF</span></strong>
    </div>
    <ul>
        <li><a href="{{store url=""}}about-magento-demo-store/">Company Profile</a></li>
        <li><a href="{{store url=""}}contacts/">News and Articles</a></li>
        <li><a href="{{store url=""}}customer-service/">Locations</a></li>
        <li><a href="{{store url=""}}privacy-policy-cookie-restriction-mode/">Careers</a></li>
                <li><a href="{{store url=""}}privacy-policy-cookie-restriction-mode/">Capabilities</a></li>
                <li><a href="{{store url=""}}privacy-policy-cookie-restriction-mode/">Quality</a></li>
    </ul>
</div>
<div class="links">
    <div class="block-title">
        <strong><span>quick links</span></strong>
    </div>
    <ul>
        <li><a href="{{store url=""}}about-magento-demo-store/">Distributor Inventory</a></li>
        <li><a href="{{store url=""}}contacts/">Competitor Cross Reference</a></li>
        <li><a href="{{store url=""}}customer-service/">Product Compliance</a></li>
        <li><a href="{{store url=""}}privacy-policy-cookie-restriction-mode/">Literature</a></li>
        <li><a href="{{store url=""}}privacy-policy-cookie-restriction-mode/">Extranet Log in</a></li>
    </ul>
</div>
<div class="links">
    <div class="block-title">
        <strong><span>Contact Us</span></strong>
    </div>
    <ul>
        <li><a href="{{store url=""}}about-magento-demo-store/">Contacts Factory</a></li>
        <li><a href="{{store url=""}}contacts/">Local Representatives</a></li>
        <li><a href="{{store url=""}}customer-service/">Distributor Listing</a></li>
    </ul>
</div>
EOF;

if(!$cmsBlock->getId()){
    $cmsBlock->setTitle('Footer Company')->setIdentifier('footer_company');
}

$cmsBlock->setStoreId(0)
        ->setContent($pageContent)
        ->setIsActive(1)
        ->save();

/* FOOTER BOTTOM COPYRIGHT */
$cmsBlock = Mage::getModel('cms/block')->load('footer_bottom_copyright', 'identifier');
$pageContent =<<<EOF
<div class="links-bottom">
    <div id="left-side">
        <ul>
            <li><a href="{{store url=""}}about-us">Copyright |</a></li>
            <li><a href="{{store url=""}}kebijakan-privasi"> Terms & Conditions |</a></li>
            <li><a href="{{store url=""}}persyaratan-dan-ketentuan"> Privacy Policy |</a></li>
            <li><a href="{{store url=""}}informasi-pengiriman"> Logos |</a></li>
            <li><a href="{{store url=""}}aturan-pengembalian">Amphenol.com</a></li>
        </ul>
    </div>
</div>

EOF;

if(!$cmsBlock->getId()){
    $cmsBlock->setTitle('Footer Bottom Copyright')->setIdentifier('footer_bottom_copyright');
}

$cmsBlock->setStoreId(0)
->setContent($pageContent)
->setIsActive(1)
->save();

/* NAVIGASI HEADER TAMBAHAN*/
$cmsBlock = Mage::getModel('cms/block')->load('nav_header', 'identifier');
$pageContent =<<<EOF
<div class="nav-atas">
    <div id="isi-nav-atas">
        <ul>
            <li><a href="{{store url=""}}about-us">About Us</a></li>
            <li><a href="{{store url=""}}kebijakan-privasi">Markets</a></li>
            <li><a href="{{store url=""}}persyaratan-dan-ketentuan">Resources</a></li>
            <li><a href="{{store url=""}}informasi-pengiriman">Contact Us</a></li>
        </ul>
    </div>
</div>

EOF;

if(!$cmsBlock->getId()){
    $cmsBlock->setTitle('Nav Header')->setIdentifier('nav_header');
}

$cmsBlock->setStoreId(0)
->setContent($pageContent)
->setIsActive(1)
->save();

$installer->endSetup();
?>
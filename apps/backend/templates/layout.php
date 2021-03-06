<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="topbox">
      <?php if($sf_user->isAuthenticated()): ?>
      Welcome <?php echo $sf_user->getGuardUser()->getUsername() ?><br /><br />
      <a href="<?php echo url_for('/index.php') ?>" >Public Access</a> - <a href="<?php echo url_for('@sf_guard_signout') ?>" >Logout</a>
      <?php else: ?>
        <?php include_component('sfGuardAuth', 'loginfast') ?>
      <?php endif; ?>
    </div>
    <div id="top">
      <div class="searchbox">
      </div>
      <a class="logo" href="<?php echo url_for('@homepage') ?>"><img src="/images/logo.png" alt="logo" /></a>
    </div>
    <div id="content">
      <div id="menu">
        <div id="menu-l">
          <div id="menu-r">
            <div id="menu-c">
              <ul>
                <li><a href="<?php echo url_for('@sf_guard_user') ?>">USER</a></li>
                <li><a href="<?php echo url_for('@quest') ?>">Quests</a></li>
                <li><a href="<?php echo url_for('@status') ?>">Status</a></li>
                <li><a href="<?php echo url_for('@comments') ?>">Comments</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php echo $sf_content ?>
    </div>
    <div id="bottom">Aion LP designed by Seigi. Materials are trademarks and copyrights of NCsoft Corporation.<br />
                     Powered by Mystick for Aion Lightning<br />
       </div>

  </body>
</html>

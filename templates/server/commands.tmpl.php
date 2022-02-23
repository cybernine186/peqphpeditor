        <div class="table_container" style="width: 500px;">
          <div class="table_header">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td>Commands</td>
                <td align="right"><a href="index.php?editor=server&action=71"><img src="images/add.gif" border="0" title="Add a command"></a></td>
              </tr>
            </table>
          </div>
          <table class="table_content2" width="100%" cellpadding="2" cellspacing="0">
<?if (isset($commands)):?>
            <tr>
              <td align="center" width="40%"><strong>Command</strong></td>
              <td align="center" width="20%"><strong>Aliases</strong></td>
              <td align="center" width="20%"><strong>Access</strong></td>
              <td width="20%">&nbsp;</td>
            </tr>
<?$x=0; foreach($commands as $commands=>$v):?>
            <tr bgcolor="#<? echo ($x % 2 == 0) ? "BBBBBB" : "AAAAAA";?>">
              <td align="center" width="20%"><?=$v['command']?></td>
              <td align="center" width="20%"><?=$v['aliases']?></td>
              <td align="center" width="15%"><?=$v['access']?></td>
              <td align="right"><a href="index.php?editor=server&command=<?=$v['command']?>&action=72"><img src="images/edit2.gif" border="0" title="Edit Command"></a>&nbsp;<a onClick="return confirm('Really Delete this Command?');" href="index.php?editor=server&command=<?=$v['command']?>&action=73"><img src="images/remove3.gif" border="0" title="Delete this Command"></a></td>
            </tr>
<?$x++; endforeach;?>
<?endif;?>
<?if (!isset($commands)):?>
            <tr>
              <td align="left" width="100" style="padding: 10px;">No Commands</td>
            </tr>
<?endif;?>
          </table>
        </div>

<?php
/* Smarty version 3.1.29, created on 2016-12-09 09:00:04
  from "C:\wamp64\www\Eigen spel\tpl\index.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584a648426ea13_21652667',
  'file_dependency' => 
  array (
    '29ae8891fc630520e20aaae1471271f4418e19a7' => 
    array (
      0 => 'C:\\wamp64\\www\\Eigen spel\\tpl\\index.html.tpl',
      1 => 1481270402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584a648426ea13_21652667 ($_smarty_tpl) {
?>
<html>
<head>
    <title> <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="plaatje">
    <?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
        <p style="border: 1px solid #ff0000;"></p>
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_0_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_0_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_local_item;
}
if ($__foreach_error_0_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_item;
}
?>
        </ul>
    <?php }?>


        <ul>
            <li>Attack: <strong><?php echo $_smarty_tpl->tpl_vars['attack']->value;?>
</strong></li>
            <li>Defence: <strong><?php echo $_smarty_tpl->tpl_vars['defence']->value;?>
</strong></li>
            <li>Magic: <strong><?php echo $_smarty_tpl->tpl_vars['magic']->value;?>
</strong></li>
            <li>Gold in hand: <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong></li>
            <li>Current HP: <strong><?php echo $_smarty_tpl->tpl_vars['currentHP']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['maximumHP']->value;?>
</strong>
            <li>Gold Inbank: <strong><?php echo $_smarty_tpl->tpl_vars['inbank']->value;?>
</strong></li>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 97) {?>
            <?php if ($_smarty_tpl->tpl_vars['combat']->value == '') {?>
            <p>You've encountered a <strong><?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
! </strong></p>
            <form action='index.php?location_id=97' method='post'>
                <input type='submit' name='action' value='Attack' /> or
                <input type='submit' name='action' value='Run Away' />
                <input type='hidden' name='monster' value='<?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
' />
            </form>
        <?php } else { ?>
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['combat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_1_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_1_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_1_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                        <li><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['attacker'];?>
</strong> attacks <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['defender'];?>
</strong> for <?php echo $_smarty_tpl->tpl_vars['i']->value['damage'];?>
 damage!</li>
                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved_local_item;
}
if ($__foreach_i_1_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved_item;
}
if ($__foreach_i_1_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_1_saved_key;
}
?>
                </ul>
                <?php if (isset($_smarty_tpl->tpl_vars['won']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['won']->value == 1) {?>
                    <p>You found a <strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong>!</p>
                    <p>You killed <strong><?php echo $_POST['monster'];?>
</strong>! You gained <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong> gold.</p>
                    <p><a href='index.php?location_id=44'>Go on Friend</a></p>
                    <p><a href="index.php?location_id=34">Go back to the station </a> </p>
                <?php }?>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['lost']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['lost']->value == 1) {?>
                    <p>You were killed by <strong><?php echo $_POST['monster'];?>
</strong>.</p>
                    <p><a href='index.php'>Game over</a></p>
                <?php }?>
                <?php }?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 100) {?>
            <?php if ($_smarty_tpl->tpl_vars['combat']->value == '') {?>
                <p>You've encountered a <strong><?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
! </strong></p>
                <form action='index.php?location_id=100' method='post'>
                    <input type='submit' name='action' value='Attack' /> or
                    <input type='submit' name='action' value='Run Away' />
                    <input type='hidden' name='monster' value='<?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
' />
                </form>
            <?php } else { ?>
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['combat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_2_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                        <li><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['attacker'];?>
</strong> attacks <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['defender'];?>
</strong> for <?php echo $_smarty_tpl->tpl_vars['i']->value['damage'];?>
 damage!</li>
                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved_local_item;
}
if ($__foreach_i_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved_item;
}
if ($__foreach_i_2_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_2_saved_key;
}
?>
                </ul>
                <?php if (isset($_smarty_tpl->tpl_vars['won']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['won']->value == 1) {?>
                        <p>You found a <strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong>!</p>
                        <p>You killed <strong><?php echo $_POST['monster'];?>
</strong>! You gained <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong> gold.</p>
                        <p><a href='index.php?location_id=13'>Go to the lake</a></p>
                        <p><a href="index.php?location_id=12">Go back on the street </a> </p>
                    <?php }?>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['lost']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['lost']->value == 1) {?>
                        <p>You were killed by <strong><?php echo $_POST['monster'];?>
</strong>.</p>
                        <p><a href='index.php'>Game over</a></p>
                    <?php }?>
                <?php }?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 99) {?>
            <p>Welcome to the healer. You currently have <strong><?php echo $_smarty_tpl->tpl_vars['curhp']->value;?>
</strong> HP out of a maximum of <strong><?php echo $_smarty_tpl->tpl_vars['maxhp']->value;?>
</strong>.</p>
            <p>You have <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong> gold to heal yourself with, and it will cost you <strong>1 gold per HP healed</strong> to heal yourself.</p>
            <?php if (isset($_smarty_tpl->tpl_vars['healed']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['healed']->value != 0) {?>
                <p>You have been healed for <strong><?php echo $_smarty_tpl->tpl_vars['healed']->value;?>
</strong> HP.</p>
            <?php }?>
            <?php }?>
            <form action='index.php?location_id=99' method='post'>
                <input type='text' name='amount' id='amount' /><br />
                <input type='submit' name='action' value='Heal Me' />
            </form>

            <p>Below are the Potions currently available for purchase.</p>
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
                <p style='color:red'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            <?php }?>
             <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
                <p style='color:green'><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            <?php }?>
             <?php }?>

            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['potion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_3_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_3_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_3_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                <li>
                    <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</strong> - <em><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
 gold coins</em>
                    <form action='index.php?location_id=99' method='post'>
                        <input type='hidden' name='potion-id' value='<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
' />
                        <input type='submit' value='Buy' />
                    </form>
                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_3_saved_local_item;
}
if ($__foreach_i_3_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_3_saved_item;
}
if ($__foreach_i_3_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_3_saved_key;
}
?>
            </ul>

            <p><a href='index.php?location_id=18'>Back outside </a></p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 2) {?>
            <li><a href="index.php?location_id=1"> Log out </a></li>
            <?php echo '<script'; ?>
 type="text/javascript">
                window.alert("Fooled You Friend There is no Button");
            <?php echo '</script'; ?>
>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 1) {?>
            <form method="post" action="index.php?location_id=1">
                <h1> Register to save stats</h1> <br>
                First name:<br>
                <input type="text" name="FirstName" id="FirstName" value="<?php if (isset($_POST['FirstName'])) {
echo $_POST['FirstName'];
}?>"><br>
                Last name:<br>
                <input type="text" name="LastName" id="LastName" value="<?php if (isset($_POST['LastName'])) {
echo $_POST['LastName'];
}?>"><br>
                Email: <br>
                <input type="text" name="Email" id="Email" value="<?php if (isset($_POST['Email'])) {
echo $_POST['Email'];
}?>"><br>
                Password:<br>
                <input type="text" name="Password" id="Password" onblur="verifyMinLength(this, 10)" value="<?php if (isset($_POST['Password'])) {
echo $_POST['Password'];
}?>"><br>
                Username:<br>
                <input type="text" name="Username" id="Username" value="<?php if (isset($_POST['Username'])) {
echo $_POST['Username'];
}?>"><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php }?>

        <?php echo '<script'; ?>
 type="text/javascript">
        function verifyMinLength(o, len) {
        if (o.value.length < len) {
            alert('The password must be 10 characters in length.');
            location.href = "http://localhost/Eigen%20spel/index.php?location_id=96";
                }
            }
        <?php echo '</script'; ?>
>

     <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 110) {?>
         <?php if ($_smarty_tpl->tpl_vars['combat']->value == '') {?>
             <p>You've encountered a <strong><?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
! </strong></p>
             <form action='index.php?location_id=110' method='post'>
                 <input type='submit' name='action' value='Attack' /> or
                 <input type='submit' name='action' value='Run Away' />
                 <input type='hidden' name='monster' value='<?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
' />
             </form>
         <?php } else { ?>
             <ul>
                 <?php
$_from = $_smarty_tpl->tpl_vars['combat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_4_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_4_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_4_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                     <li><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['attacker'];?>
</strong> attacks <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['defender'];?>
</strong> for <?php echo $_smarty_tpl->tpl_vars['i']->value['damage'];?>
 damage!</li>
                 <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_4_saved_local_item;
}
if ($__foreach_i_4_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_4_saved_item;
}
if ($__foreach_i_4_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_4_saved_key;
}
?>
             </ul>
             <?php if (isset($_smarty_tpl->tpl_vars['won']->value)) {?>
                 <?php if ($_smarty_tpl->tpl_vars['won']->value == 1) {?>
                     <p>You found a <strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong>!</p>
                     <p>You killed <strong><?php echo $_POST['monster'];?>
</strong>! You gained <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong> gold.</p>
                     <p><a href='index.php?location_id=105'>Go on the ship</a></p>
                     <p><a href="index.php?location_id=104">Go back to the boat </a> </p>
                 <?php }?>
             <?php }?>
             <?php if (isset($_smarty_tpl->tpl_vars['lost']->value)) {?>
                 <?php if ($_smarty_tpl->tpl_vars['lost']->value == 1) {?>
                     <p>You were killed by <strong><?php echo $_POST['monster'];?>
</strong>.</p>
                     <p><a href='index.php'>Game over</a></p>
                 <?php }?>
             <?php }?>
         <?php }?>
     <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['location']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 33) {?>
        <h3>Current Equipment:</h3>
        <p><a href='index.php?location_id=32'>Back outside</a></p>
        <ul>
        <li>
        Primary Hand:
            <?php if (isset($_smarty_tpl->tpl_vars['phand']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['phand']->value != '') {?>
                <?php echo $_smarty_tpl->tpl_vars['phand']->value;?>

            <form action='index.php?location_id=33' method='post'>
            <input type='hidden' name='sell' value='phand' />
            <input type='submit' value='Sell' />
            </form>
            <?php } else { ?>
            None
            <?php }?>
            <?php }?>
        </li>
        <li>
        Secondary Hand:
            <?php if (isset($_smarty_tpl->tpl_vars['shand']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['shand']->value != '') {?>
                <?php echo $_smarty_tpl->tpl_vars['shand']->value;?>

            <form action='index.php?location_id=33' method='post'>
            <input type='hidden' name='sell' value='shand' />
            <input type='submit' value='Sell' />
            </form>
            <?php } else { ?>
            None
            <?php }?>
            <?php }?>
        </li>
        </ul>

        <p>
        <form action='index.php?location_id=33' method='post'>
        <input type='submit' value='Swap' name='swap' />
        </form>
        </p>

            <p>Below are the weapons currently available for purchase.</p>
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['weapons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_5_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_5_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_5_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                <li>
                    <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</strong> - <em><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
 gold coins</em>
                    <form action='index.php?location_id=33' method='post'>
                        <input type='hidden' name='weapon-id' value='<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
' />
                        <input type='submit' value='Buy' />
                    </form>
                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_5_saved_local_item;
}
if ($__foreach_i_5_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_5_saved_item;
}
if ($__foreach_i_5_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_5_saved_key;
}
?>
            </ul>

            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
                <p style='color:red'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
                <p style='color:green'><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            <?php }?>
                <?php }?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 98) {?>
            <p>Welcome to the bank </p>   <p> You currently have <strong><?php echo $_smarty_tpl->tpl_vars['inbank']->value;?>
</strong> gold in the bank, and <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong> gold in hand.</p>
            <form action='index.php?location_id=98' method='post'>
                <input type='text' name='amount' /><br />
                <input type='submit' name='action' value='Deposit' /> or
                <input type='submit' name='action' value='Withdraw' /> 	</form>
            <p><a href='index.php?location_id=46'>Back to the hall</a></p>

            <?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
                <p class="item"> <?php echo $_smarty_tpl->tpl_vars['info']->value;?>
 <br>
                    You cant withdraw/depoist a negtive number</p>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['deposited']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['deposited']->value != 0) {?>
                <p>You deposited <strong><?php echo $_smarty_tpl->tpl_vars['deposited']->value;?>
</strong> gold into your bank account. Your total in the bank is now <strong><?php echo $_smarty_tpl->tpl_vars['inbank']->value;?>
</strong>.</p>
            <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['withdrawn']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['withdrawn']->value != 0) {?>
                <p>You withdraw <strong><?php echo $_smarty_tpl->tpl_vars['withdrawn']->value;?>
</strong> gold from your bank account. Your total gold in hand is now <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong>.</p>
            <?php }?>
           <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 103) {?>

            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['inventory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_6_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_6_saved_key = isset($_smarty_tpl->tpl_vars['item_id']) ? $_smarty_tpl->tpl_vars['item_id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_6_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                    <li>
                        <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 x <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>

                        <form action='index.php?location_id=103' method='post'>
                            <input type='hidden' name='sell-id' value='<?php echo $_smarty_tpl->tpl_vars['i']->value['item_id'];?>
' />
                            <input type='submit' value='Sell' />
                        </form>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_6_saved_local_item;
}
if ($__foreach_i_6_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_6_saved_item;
}
if ($__foreach_i_6_saved_key) {
$_smarty_tpl->tpl_vars['item_id'] = $__foreach_i_6_saved_key;
}
?>
            </ul>

            <p>You may purchase any of the items listed below.</p>
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
                    <p style='color:red'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
                    <p style='color:green'><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
                <?php }?>
            <?php }?>
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_7_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_7_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_7_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                <li>
                    <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</strong> - <em><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
 gold coins</em>
                    <form action='index.php?location_id=103' method='post'>
                        <input type='hidden' name='item-id' value='<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
' />
                        <input type='submit' value='Buy' />
                    </form>
                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_7_saved_local_item;
}
if ($__foreach_i_7_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_7_saved_item;
}
if ($__foreach_i_7_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_7_saved_key;
}
?>
            </ul>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 100 || $_smarty_tpl->tpl_vars['location']->value->id == 97 || $_smarty_tpl->tpl_vars['location']->value->id == 110) {?>
            <h1> <?php echo $_smarty_tpl->tpl_vars['location']->value->Title;?>
 </h1>
            <p>  <?php echo $_smarty_tpl->tpl_vars['location']->value->Story;?>
</p>
                 <?php echo $_smarty_tpl->tpl_vars['img']->value;?>

        <?php } else { ?>
        <h1><?php echo $_smarty_tpl->tpl_vars['location']->value->Title;?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['location']->value->Story;?>
</p>
        <?php echo $_smarty_tpl->tpl_vars['location']->value->Foto_url;?>

            <?php }?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 101) {?>
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['inventory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_8_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_8_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_8_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                    <li>
                        <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 x <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
</strong>
                        <form action='index.php?location_id=101' method='post'>
                            <input type='hidden' name='item-id' value='<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
' />
                            <input type='submit' value='Use' />
                        </form>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_8_saved_local_item;
}
if ($__foreach_i_8_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_8_saved_item;
}
if ($__foreach_i_8_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_8_saved_key;
}
?>
            </ul>
        <?php }?>


        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['location']->value->Choices;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_choice_9_saved_item = isset($_smarty_tpl->tpl_vars['choice']) ? $_smarty_tpl->tpl_vars['choice'] : false;
$_smarty_tpl->tpl_vars['choice'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['choice']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->_loop = true;
$__foreach_choice_9_saved_local_item = $_smarty_tpl->tpl_vars['choice'];
?>
                <!-- change the string output to a int value  -->
                <?php echo intval($_smarty_tpl->tpl_vars['choice']->value->to_id);?>

                <?php if (isset($_smarty_tpl->tpl_vars['choice']->value->need_item_id)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['location']->value->Inventory;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Hai_10_saved_item = isset($_smarty_tpl->tpl_vars['Hai']) ? $_smarty_tpl->tpl_vars['Hai'] : false;
$_smarty_tpl->tpl_vars['Hai'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Hai']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Hai']->value) {
$_smarty_tpl->tpl_vars['Hai']->_loop = true;
$__foreach_Hai_10_saved_local_item = $_smarty_tpl->tpl_vars['Hai'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['Hai']->value->item_id == $_smarty_tpl->tpl_vars['choice']->value->need_item_id) {?>
                        <li><a href="index.php?location_id=<?php echo $_smarty_tpl->tpl_vars['choice']->value->to_id;?>
"><?php echo $_smarty_tpl->tpl_vars['choice']->value->title;?>
</a> </li>
                        <p class="Got"> Dorker You have the item <?php echo $_smarty_tpl->tpl_vars['choice']->value->need_item_id;?>
  </p>
                        <!-- <p class="Haha"> Nothing Here to find</p> -->
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['Hai'] = $__foreach_Hai_10_saved_local_item;
}
if ($__foreach_Hai_10_saved_item) {
$_smarty_tpl->tpl_vars['Hai'] = $__foreach_Hai_10_saved_item;
}
?>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['choice']->value->need_item_id)) {?>
                    <li class="Gone"><a href="index.php?location_id=<?php echo $_smarty_tpl->tpl_vars['choice']->value->to_id;?>
"><?php echo $_smarty_tpl->tpl_vars['choice']->value->title;?>
</a></li>
                    <?php } elseif ($_smarty_tpl->tpl_vars['location']->value->id == 1) {?>
                    <li class="Gone"><a href="index.php?location_id=<?php echo $_smarty_tpl->tpl_vars['choice']->value->to_id;?>
"><?php echo $_smarty_tpl->tpl_vars['choice']->value->title;?>
</a></li>
                <?php } else { ?>
                    <li><a href="index.php?location_id=<?php echo $_smarty_tpl->tpl_vars['choice']->value->to_id;?>
"><?php echo $_smarty_tpl->tpl_vars['choice']->value->title;?>
</a> </li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['choice'] = $__foreach_choice_9_saved_local_item;
}
if ($__foreach_choice_9_saved_item) {
$_smarty_tpl->tpl_vars['choice'] = $__foreach_choice_9_saved_item;
}
?>
            <?php if ($_smarty_tpl->tpl_vars['location']->value->id == 25 || $_smarty_tpl->tpl_vars['location']->value->id == 29 || $_smarty_tpl->tpl_vars['location']->value->id == 51 || $_smarty_tpl->tpl_vars['location']->value->id == 52) {?>
                <?php echo session_unset();?>

                <?php echo session_destroy();?>

            <?php }?>
        </ul>

        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['location']->value->Inventory;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_hello_11_saved_item = isset($_smarty_tpl->tpl_vars['hello']) ? $_smarty_tpl->tpl_vars['hello'] : false;
$_smarty_tpl->tpl_vars['hello'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['hello']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['hello']->value) {
$_smarty_tpl->tpl_vars['hello']->_loop = true;
$__foreach_hello_11_saved_local_item = $_smarty_tpl->tpl_vars['hello'];
?>
               <li> <?php echo $_smarty_tpl->tpl_vars['hello']->value->player_id;?>
 <?php echo $_smarty_tpl->tpl_vars['hello']->value->item_id;?>
 <?php echo $_smarty_tpl->tpl_vars['hello']->value->space;?>
 <?php echo $_smarty_tpl->tpl_vars['hello']->value->quantity;?>
 </li>
            <?php
$_smarty_tpl->tpl_vars['hello'] = $__foreach_hello_11_saved_local_item;
}
if ($__foreach_hello_11_saved_item) {
$_smarty_tpl->tpl_vars['hello'] = $__foreach_hello_11_saved_item;
}
?>
        </ul>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function(){
                $(".Gone").hide();
            });
        <?php echo '</script'; ?>
>
    </div>
</body>
</html><?php }
}


<li id="login" >  
        <div class="dropdown">
  <a id="login" onclick="toggleContent()" href="#">Login</a>
  <div id="dropdown-content">
    <form action="../../webpage/MySQL/login.php" method="POST">
 <fieldset id="inputs">
            <input id="userId" type="text" name="userId" placeholder="Your User id" required> 
            <br /> 
            <br />  
            <input id="password" type="password" name="Password" placeholder="Password" required>
          </fieldset>
          <fieldset id="actions">
            <input type="submit" id="submit" value="Log in">
            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
            <br/><br/>
            <a style="text-decoration: none; border: 2px solid navy; background: #d14545; color:white;" href="registrationPage.php" target="_top">Register</a>
  </fieldset></form>
  
  </div>
</div>     
         </li>
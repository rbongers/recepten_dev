<?php

/* layout/base.twig */
class __TwigTemplate_d1a8979fd0fae943c4f9c9d276a9ddfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>

<head>
  <meta charset=\"utf-8\">

  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <title>Mijn Recepten Boek</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "css/style5e1f.css?v=2\">
  <!-- <link rel=\"stylesheet\" href=\"";
        // line 15
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "css/jcarousel.html\"> -->

\t<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
\t<script src=\"";
        // line 18
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/modernizr-1.7.min.js\"></script>
\t<script src=\"http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js\" type=\"text/javascript\"></script>
\t<!-- <script type=\"text/javascript\" src=\"";
        // line 20
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/jquery-1.7.1.min.js\"></script> -->

\t<script src=\"http://thecodeplayer.com/uploads/js/jquery.easing.min.js\" type=\"text/javascript\"></script>
\t<!-- <script src=\"";
        // line 23
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/jquery.easing.1.3.js\"></script> -->
\t<script src=\"";
        // line 24
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/script.js\"></script>
\t<script src=\"";
        // line 25
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/recepten.js\"></script>
\t<script src=\"";
        // line 26
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/jquery.jcarousel.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t// FRONT SLIDER STARTER
\t\tjQuery(document).ready(function() {
\t\t\tjQuery('#mycarousel').jcarousel({
\t\t\t\t\tauto: 3,
\t\t\t\t\twrap: 'last',
\t\t\t\t\tscroll: 1,
\t\t\t\t\tanimation: 'slow',
\t\t\t\t\tinitCallback: mycarousel_initCallback,
\t\t\t});
\t\t\tRecepten.token = '";
        // line 37
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "';
\t\t\tRecepten.base_url = '";
        // line 38
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "';
\t\t\t";
        // line 39
        if (isset($context["register_error"])) { $_register_error_ = $context["register_error"]; } else { $_register_error_ = null; }
        if (($_register_error_ != null)) {
            // line 40
            echo "\t\t\t\t\$(\".register-btn\").trigger('click');
\t\t\t";
        }
        // line 42
        echo "\t\t});
\t</script>
</head>

<body class=\" ";
        // line 46
        if (isset($context["start"])) { $_start_ = $context["start"]; } else { $_start_ = null; }
        if (($_start_ == true)) {
            echo " home ";
        }
        echo "\">

\t<!-- LOGIN POP UPS -->
\t<div id=\"popup-overlay\"></div>
\t<div class=\"popup\" id=\"popup-login\">
\t\t<h2>Login form</h2>
\t\t<form method=\"post\" action=\"\" id=\"login_form\" class=\"form clearfix\">
\t\t\t<hr class=\"separator\">
\t\t\t<fieldset>
\t\t\t\t<label for=\"login-username\">Username:</label>
\t\t\t\t<input type=\"text\" name=\"l_username\" id=\"login-username\" class=\"input text\">
\t\t\t\t<label for=\"login-password\">Password:</label>
\t\t\t\t<input type=\"password\" name=\"l_password\" id=\"login-password\" class=\"input text\">
\t\t\t</fieldset>
\t\t\t<hr class=\"separator\">
\t\t\t<button class=\"button submit\" type=\"submit\">Login</button>
\t\t\t<div class=\"links\"><a href=\"#\">Forgotten password </a> | <a href=\"#\" class=\"register-btn\"> New account</a></div>
\t\t\t<a class=\"close\" href=\"#\"></a>
\t\t</form>
\t</div>
\t<div class=\"popup\" id=\"popup-register\">
\t\t<h2>Registration form</h2>
\t\t<hr class=\"separator\">
\t\t<form method=\"post\" action=\"\" id=\"register_form\" class=\"form clearfix\">
\t\t\t<fieldset>
\t\t\t\t<label for=\"login-username\">Username:</label>
\t\t\t\t<input type=\"text\" name=\"r_username\" id=\"login-username\" class=\"input text\">
\t\t\t\t<label for=\"login-email\">Email:</label>
\t\t\t\t<input type=\"text\" name=\"r_email\" id=\"login-email\" class=\"input text\" value=\"\">
\t\t\t\t<label for=\"login-password\">Password:</label>
\t\t\t\t<input type=\"password\" name=\"r_password\" id=\"login-password\" class=\"input text\">
\t\t\t\t<label for=\"login-confirm-password\">Confirm password:</label>
\t\t\t\t<input type=\"password\" name=\"r_passwordconfirm\" id=\"login-confirm-password\" class=\"input text\">
\t\t\t</fieldset>
\t\t
\t\t\t<hr class=\"separator\">
\t\t\t
\t\t\t<div class=\"checks\">
\t\t\t\t<div class=\"check-row\">
\t\t\t\t\t<label><input type=\"checkbox\" name=\"r_terms\" class=\"input checkbox\">I have read and agree to the <a href=\"#\">Terms &amp; Conditions</a></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"check-row\">
\t\t\t\t\t<label><input type=\"checkbox\" class=\"input checkbox\">I agree to recieve promotional mails</label>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<button class=\"button submit\">Register now</button>
\t\t</form>
\t\t<a class=\"close\" href=\"#\"></a>
\t</div>
\t<div class='wrapper'>
\t\t<header>
\t\t\t<div class=\"top-nav\">
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 101
        if (isset($context["authUser"])) { $_authUser_ = $context["authUser"]; } else { $_authUser_ = null; }
        if ($this->getAttribute($_authUser_, "logged")) {
            // line 102
            echo "\t\t\t\t\t\t\t<li><span>Welcome back ";
            if (isset($context["authUser"])) { $_authUser_ = $context["authUser"]; } else { $_authUser_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_authUser_, "username"), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Profiel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#logout\" class=\"logout-btn logout\">Logout</a></li>
\t\t\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t\t\t<li><a href=\"#\" id=\"login-btn\">login</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"register-btn\">register</a></li>
\t\t\t\t\t\t\t<li><a href=\"about.html\">about</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">menu</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"menu.html\">Sub menu</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"menu.html\">level 2</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"menu.html\">level 2</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t  \t</ul>
\t\t\t\t</nav>
\t\t\t\t<form class=\"search-form\" method=\"post\">
\t\t\t\t \t<input type=\"text\" class=\"search\">
\t\t\t\t \t<input type=\"submit\" class=\"search-submit\" value=\"\">
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<a href=\"index-2.html\" class=\"logo\"><img src=\"images/logo.png\" alt=\"your logo\" /></a>
\t\t\t<nav class=\"main-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li id=\"lava-elm\"></li>
\t\t\t\t\t<li class=\"current\">
\t\t\t\t\t\t<a href=\"listing.html\">Fruits and vegetables</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"listing.html\">Seafood</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"listing.html\">Meat</a></li>
\t\t\t\t\t<li><a href=\"listing.html\">Entrees</a></li>
\t\t\t\t\t<li><a href=\"listing.html\">Pizza and pasta</a></li>
\t\t\t\t\t<li><a href=\"listing.html\">Desserts</a></li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t";
        // line 174
        if (isset($context["start"])) { $_start_ = $context["start"]; } else { $_start_ = null; }
        if (($_start_ == true)) {
            // line 175
            echo "\t\t\t  \t<div class=\"header-slider-canvas\">
\t\t\t\t\t<div class=\"parts part-1\"></div>
\t\t\t\t\t<div class=\"parts part-2\"></div>
\t\t\t\t\t<div class=\"parts part-3\"></div>
\t\t\t\t</div>
\t\t\t\t<ul id=\"mycarousel\" class=\"jcarousel-skin-header-slider\">
\t\t\t\t\t<li><img src=\"images/slider-1.jpg\" width=\"680px\" height=\"464\" alt=\"\" /><div class=\"description\"><span class='price'>\$24.00</span><span class='name'>Lamb chops and asparagus</span><a href=\"#\" class=\"shop\">shop now</a></div></li>
\t\t\t\t\t<li><img src=\"images/slider-2.jpg\" width=\"680px\"  height=\"464\" alt=\"\" /><div class=\"description\"><span class='price'>\$39.00</span><span class='name'>Lamb chops and asparagus</span><a href=\"#\" class=\"shop\">shop now</a></div></li>
\t\t\t\t\t<li><img src=\"images/slider-3.jpg\" width=\"680px\"  height=\"464\" alt=\"\" /></li>
\t\t\t\t</ul>
\t\t\t";
        }
        // line 186
        echo "\t\t</header>
\t    ";
        // line 187
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "\t</div>
</body>



</html>";
    }

    // line 187
    public function block_content($context, array $blocks = array())
    {
        // line 188
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "layout/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 188,  288 => 187,  279 => 189,  277 => 187,  274 => 186,  261 => 175,  258 => 174,  218 => 136,  177 => 102,  174 => 101,  113 => 46,  107 => 42,  103 => 40,  100 => 39,  95 => 38,  90 => 37,  75 => 26,  70 => 25,  65 => 24,  60 => 23,  53 => 20,  47 => 18,  40 => 15,  35 => 14,  20 => 1,  286 => 139,  234 => 89,  221 => 88,  216 => 87,  211 => 84,  198 => 82,  193 => 81,  186 => 106,  173 => 74,  168 => 73,  161 => 68,  148 => 66,  143 => 65,  136 => 60,  123 => 58,  118 => 57,  111 => 52,  98 => 50,  93 => 49,  52 => 10,  41 => 9,  36 => 8,  31 => 5,  28 => 4,);
    }
}

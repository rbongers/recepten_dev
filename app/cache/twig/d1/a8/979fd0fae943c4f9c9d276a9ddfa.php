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

  <title>Cooker</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <link rel=\"shortcut icon\" href=\"http://designmania.eu/favicon.ico\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "css/style5e1f.css?v=2\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "css/jcarousel.html\">

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src=\"js/libs/modernizr-1.7.min.js\"></script>

</head>

<body class=\"home\">

\t<!-- LOGIN POP UPS -->
\t<div id=\"popup-overlay\"></div>
\t<div class=\"popup\" id=\"popup-login\">
\t\t<h2>Login form</h2>
\t\t<form method=\"post\" action=\"\" class=\"form clearfix\">
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
\t\t<form method=\"post\" action=\"#\" class=\"form clearfix\">
\t\t\t<fieldset>
\t\t\t\t<label for=\"login-username\">Username:</label>
\t\t\t\t<input type=\"text\" name=\"\" id=\"login-username\" class=\"input text\">
\t\t\t\t<label for=\"login-email\">Email:</label>
\t\t\t\t<input type=\"text\" name=\"\" id=\"login-email\" class=\"input text error\" value=\"Error\">
\t\t\t\t<label for=\"login-password\">Password:</label>
\t\t\t\t<input type=\"password\" name=\"\" id=\"login-password\" class=\"input text\">
\t\t\t\t<label for=\"login-confirm-password\">Confirm password:</label>
\t\t\t\t<input type=\"password\" name=\"\" id=\"login-confirm-password\" class=\"input text\">
\t\t\t</fieldset>
\t\t
\t\t\t<hr class=\"separator\">
\t\t\t
\t\t\t<div class=\"checks\">
\t\t\t\t<div class=\"check-row\">
\t\t\t\t\t<label><input type=\"checkbox\" class=\"input checkbox\">I have read and agree to the <a href=\"#\">Terms &amp; Conditions</a></label>
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
\t    ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "\t</div>
</body>

\t
<script type=\"text/javascript\" src=\"";
        // line 79
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/jquery-1.7.1.min.js\"></script>
<script src=\"";
        // line 80
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/jquery.easing.1.3.js\"></script>
<script src=\"";
        // line 81
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/script.js\"></script>
<script src=\"";
        // line 82
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/jquery.jcarousel.min.js\"></script>
<script type=\"text/javascript\">
\t// FRONT SLIDER STARTER
\tjQuery(document).ready(function() {
\t\tjQuery('#mycarousel').jcarousel({
\t\t\t\tauto: 3,
\t\t\t\twrap: 'last',
\t\t\t\tscroll: 1,
\t\t\t\tanimation: 'slow',
\t\t\t\tinitCallback: mycarousel_initCallback,
\t\t});
\t});
</script>
</html>";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
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
        return array (  147 => 74,  144 => 73,  125 => 82,  120 => 81,  115 => 80,  110 => 79,  104 => 75,  102 => 73,  40 => 15,  35 => 14,  20 => 1,);
    }
}

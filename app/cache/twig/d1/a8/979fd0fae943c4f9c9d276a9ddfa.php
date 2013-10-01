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
  <!-- <link rel=\"stylesheet\" href=\"";
        // line 15
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "css/jcarousel.html\"> -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src=\"";
        // line 18
        if (isset($context["resource_url"])) { $_resource_url_ = $context["resource_url"]; } else { $_resource_url_ = null; }
        echo twig_escape_filter($this->env, $_resource_url_, "html", null, true);
        echo "js/libs/modernizr-1.7.min.js\"></script>

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
\t\t<form method=\"post\" action=\"#\" id=\"register_form\" class=\"form clearfix\">
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
\t    ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "\t</div>
</body>


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
        echo "js/recepten.js\"></script>
<script src=\"";
        // line 83
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
\t\tRecepten.token = '";
        // line 94
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "';
\t\tRecepten.base_url = '";
        // line 95
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "';
\t\t";
        // line 96
        if (isset($context["register_error"])) { $_register_error_ = $context["register_error"]; } else { $_register_error_ = null; }
        if (($_register_error_ != null)) {
            // line 97
            echo "\t\t\t\$(\".register-btn\").trigger('click');
\t\t";
        }
        // line 99
        echo "\t});
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
        return array (  175 => 74,  172 => 73,  166 => 99,  162 => 97,  159 => 96,  154 => 95,  149 => 94,  134 => 83,  129 => 82,  124 => 81,  119 => 80,  114 => 79,  108 => 75,  106 => 73,  47 => 18,  40 => 15,  35 => 14,  20 => 1,);
    }
}

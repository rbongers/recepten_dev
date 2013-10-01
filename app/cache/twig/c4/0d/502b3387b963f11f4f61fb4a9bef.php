<?php

/* start.twig */
class __TwigTemplate_c40d502b3387b963f11f4f61fb4a9bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout/base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<header>
\t<div class=\"top-nav\">
\t\t<nav>
\t\t\t<ul>
\t\t\t\t";
        // line 9
        if (isset($context["authUser"])) { $_authUser_ = $context["authUser"]; } else { $_authUser_ = null; }
        if ($this->getAttribute($_authUser_, "logged")) {
            // line 10
            echo "\t\t\t\t\t<li><span>Welcome back ";
            if (isset($context["authUser"])) { $_authUser_ = $context["authUser"]; } else { $_authUser_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_authUser_, "username"), "html", null, true);
            echo "</span></li>
\t\t\t\t\t<li><a href=\"#\">Profiel</a></li>
\t\t\t\t\t<li><a href=\"#\">Logout</a></li>
\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t\t<li><a href=\"#\" id=\"login-btn\">login</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"register-btn\">register</a></li>
\t\t\t\t\t<li><a href=\"about.html\">about</a></li>
\t\t\t\t\t<li><a href=\"contact.html\">contact</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">menu</a></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"menu.html\">Sub menu</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"menu.html\">level 2</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"menu.html\">level 2</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 3</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t
\t\t\t\t
\t\t  \t</ul>
\t\t</nav>
\t\t<form class=\"search-form\" method=\"post\">
\t\t \t<input type=\"text\" class=\"search\">
\t\t \t<input type=\"submit\" class=\"search-submit\" value=\"\">
\t\t</form>
\t</div>
\t<a href=\"index-2.html\" class=\"logo\"><img src=\"images/logo.png\" alt=\"your logo\" /></a>
\t<nav class=\"main-menu\">
\t\t<ul>
\t\t\t<li id=\"lava-elm\"></li>
\t\t\t<li class=\"current\">
\t\t\t\t<a href=\"listing.html\">Fruits and vegetables</a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"listing.html\">Seafood</a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t\t<li><a href=\"menu.html\">level 2</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"listing.html\">Meat</a></li>
\t\t\t<li><a href=\"listing.html\">Entrees</a></li>
\t\t\t<li><a href=\"listing.html\">Pizza and pasta</a></li>
\t\t\t<li><a href=\"listing.html\">Desserts</a></li>
\t\t</ul>
\t</nav>
  \t<div class=\"header-slider-canvas\">
\t\t<div class=\"parts part-1\"></div>
\t\t<div class=\"parts part-2\"></div>
\t\t<div class=\"parts part-3\"></div>
\t</div>
\t<ul id=\"mycarousel\" class=\"jcarousel-skin-header-slider\">
\t\t<li><img src=\"images/slider-1.jpg\" width=\"680px\" height=\"464\" alt=\"\" /><div class=\"description\"><span class='price'>\$24.00</span><span class='name'>Lamb chops and asparagus</span><a href=\"#\" class=\"shop\">shop now</a></div></li>
\t\t<li><img src=\"images/slider-2.jpg\" width=\"680px\"  height=\"464\" alt=\"\" /><div class=\"description\"><span class='price'>\$39.00</span><span class='name'>Lamb chops and asparagus</span><a href=\"#\" class=\"shop\">shop now</a></div></li>
\t\t<li><img src=\"images/slider-3.jpg\" width=\"680px\"  height=\"464\" alt=\"\" /></li>
\t</ul>
</header>
<div class=\"content clearfix\">
\t<div id=\"meals-of-the-day\">
\t\t<h3 class=\"title-separator\"><span class=\"title\">Meals of the day</span><span class=\"sep\"></span></h3>
\t\t<ul>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-1.png\" alt=\"\"></div>
\t\t\t\t<div class=\"desc-holder\">
\t\t\t\t\t<h1><a href=\"#\">Lorem ipsum dolar sit amet consectetur</a></h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
\t\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-2.png\" alt=\"\"></div>
\t\t\t\t<div class=\"desc-holder\">
\t\t\t\t\t<h1><a href=\"#\">Lorem ipsum dolar sit amet consectetur</a></h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
\t\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-3.png\" alt=\"\"></div>
\t\t\t\t<div class=\"desc-holder\">
\t\t\t\t\t<h1><a href=\"#\">Lorem ipsum dolar sit amet consectetur</a></h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
\t\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-1.png\" alt=\"\"></div>
\t\t\t\t<div class=\"desc-holder\">
\t\t\t\t\t<h1><a href=\"#\">Lorem ipsum dolar sit amet consectetur</a></h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
\t\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-2.png\" alt=\"\"></div>
\t\t\t\t<div class=\"desc-holder\">
\t\t\t\t\t<h1><a href=\"#\">Lorem ipsum dolar sit amet consectetur</a></h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
\t\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-3.png\" alt=\"\"></div>
\t\t\t\t<div class=\"desc-holder\">
\t\t\t\t\t<h1><a href=\"#\">Lorem ipsum dolar sit amet consectetur</a></h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
\t\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<h3 class=\"title-separator\"><span class=\"title\">Featured meals</span><span class=\"sep\"></span></h3>
\t<div id=\"featured-meals\">
\t\t<ul>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-4.jpg\" alt=\"\"></div>
\t\t\t\t<h1><a href=\"#\">Lorem ipsum</a></h1>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-5.jpg\" alt=\"\"></div>
\t\t\t\t<h1><a href=\"#\">Lorem ipsum</a></h1>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t</li>
\t\t\t<li class=\"meal\">
\t\t\t\t<div class=\"img-holder\"><img src=\"images/meal-6.jpg\" alt=\"\"></div>
\t\t\t\t<h1><a href=\"#\">Lorem ipsum</a></h1>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t<span class=\"price\">\$15.45</span>
\t\t\t\t<a href=\"check-out.html\" class=\"add-to-cart-button\">add to cart</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"cart-box\">
\t\t<div class=\"top\">Cart</div>
\t\t<div class=\"body\">
\t\t\t<ul>
\t\t\t\t<li class=\"info\">
\t\t\t\t\t<span class=\"products\"><strong>5</strong> products</span>
\t\t\t\t\t<a href=\"#\">View cart</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"price\">
\t\t\t\t\t<span class=\"label\">Shipping</span>
\t\t\t\t\t<span class=\"value\">\$0.00</span>
\t\t\t\t</li>
\t\t\t\t<li class=\"price\">
\t\t\t\t\t<span class=\"label\">Total</span>
\t\t\t\t\t<span class=\"value\">\$0.00</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a class=\"submit-button\" href=\"check-out.html\">Check out</a>
\t\t\t<div class=\"graphic\"></div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "start.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 44,  49 => 14,  40 => 10,  37 => 9,  31 => 5,  28 => 4,);
    }
}

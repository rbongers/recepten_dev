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
        echo "
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
        return array (  31 => 5,  28 => 4,);
    }
}

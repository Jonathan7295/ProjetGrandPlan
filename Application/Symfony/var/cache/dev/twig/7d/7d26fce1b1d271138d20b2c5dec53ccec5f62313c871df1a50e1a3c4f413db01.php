<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2f0a809987bfd9ed19d909c08185b9685cf32bde3f6f1eee8fd7dfaceaf8f2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d6fa669847a6c3d4c9e1536b80acc1e8a402f7ba0eed60f5848741ecca0c1a = $this->env->getExtension("native_profiler");
        $__internal_72d6fa669847a6c3d4c9e1536b80acc1e8a402f7ba0eed60f5848741ecca0c1a->enter($__internal_72d6fa669847a6c3d4c9e1536b80acc1e8a402f7ba0eed60f5848741ecca0c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d6fa669847a6c3d4c9e1536b80acc1e8a402f7ba0eed60f5848741ecca0c1a->leave($__internal_72d6fa669847a6c3d4c9e1536b80acc1e8a402f7ba0eed60f5848741ecca0c1a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b52accaa11f4788afc71a46d9e129e339f7e8d79744d42fa04664b43eb6d940d = $this->env->getExtension("native_profiler");
        $__internal_b52accaa11f4788afc71a46d9e129e339f7e8d79744d42fa04664b43eb6d940d->enter($__internal_b52accaa11f4788afc71a46d9e129e339f7e8d79744d42fa04664b43eb6d940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "\t<div class=\"login\">
\t\t<header class=\"login-header\"><span class=\"text\">LOGIN</span><span class=\"loader\"></span></header>
\t\t<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t    <input type=\"text\" id=\"username\" placeholder=\"Username\" class=\"login-input\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t    <input type=\"password\" placeholder=\"Password\" id=\"password\" class=\"login-input\" name=\"_password\" required=\"required\" />
\t\t    
\t\t    <input type=\"submit\" id=\"_submit\" class=\"login-btn\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t</form>
\t</div>

\t";
        // line 25
        $this->displayBlock('javascript', $context, $blocks);
        // line 34
        echo "
      ";
        // line 35
        echo "<script type=\"text/javascript\">loading();</script>";
        echo "
    
";
        
        $__internal_b52accaa11f4788afc71a46d9e129e339f7e8d79744d42fa04664b43eb6d940d->leave($__internal_b52accaa11f4788afc71a46d9e129e339f7e8d79744d42fa04664b43eb6d940d_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fb9dccbfd36ec7972b7111354faf8691a8fdc57722a517842e63eb41ff2a44ec = $this->env->getExtension("native_profiler");
        $__internal_fb9dccbfd36ec7972b7111354faf8691a8fdc57722a517842e63eb41ff2a44ec->enter($__internal_fb9dccbfd36ec7972b7111354faf8691a8fdc57722a517842e63eb41ff2a44ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t";
        
        $__internal_fb9dccbfd36ec7972b7111354faf8691a8fdc57722a517842e63eb41ff2a44ec->leave($__internal_fb9dccbfd36ec7972b7111354faf8691a8fdc57722a517842e63eb41ff2a44ec_prof);

    }

    // line 25
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2b7ae6e7caa75b126a0df391f58408951a7a4e394da9365fb010c030b4fd2ebc = $this->env->getExtension("native_profiler");
        $__internal_2b7ae6e7caa75b126a0df391f58408951a7a4e394da9365fb010c030b4fd2ebc->enter($__internal_2b7ae6e7caa75b126a0df391f58408951a7a4e394da9365fb010c030b4fd2ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 26
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bsa.js"), "html", null, true);
        echo "\"></script> 
\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script> 
\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\" type=\"text/javascript\"></script>
\t    <script type=\"text/javascript\">

\t\t</script>

\t";
        
        $__internal_2b7ae6e7caa75b126a0df391f58408951a7a4e394da9365fb010c030b4fd2ebc->leave($__internal_2b7ae6e7caa75b126a0df391f58408951a7a4e394da9365fb010c030b4fd2ebc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 27,  118 => 26,  112 => 25,  102 => 10,  96 => 9,  86 => 35,  83 => 34,  81 => 25,  74 => 21,  67 => 17,  62 => 15,  58 => 14,  54 => 12,  51 => 9,  45 => 7,  42 => 6,  36 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content  %}*/
/* 	{% if error %}*/
/* 		<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     {% block stylesheet %}*/
/* 		<link rel="stylesheet" href="{{  asset ( 'css/style.css' )  }}" type="text/css" />*/
/* 	{% endblock %}*/
/* 	<div class="login">*/
/* 		<header class="login-header"><span class="text">LOGIN</span><span class="loader"></span></header>*/
/* 		<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 		    <input type="text" id="username" placeholder="Username" class="login-input" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/* 		    <input type="password" placeholder="Password" id="password" class="login-input" name="_password" required="required" />*/
/* 		    */
/* 		    <input type="submit" id="_submit" class="login-btn" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 		</form>*/
/* 	</div>*/
/* */
/* 	{% block javascript %}*/
/* 		<script src="{{ asset('js/bsa.js') }}"></script> */
/* 		<script src="{{ asset('js/script.js') }}"></script> */
/* 	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>*/
/* 	    <script type="text/javascript">*/
/* */
/* 		</script>*/
/* */
/* 	{% endblock %}*/
/* */
/*       {{ '<script type="text/javascript">loading();</script>' }}*/
/*     */
/* {% endblock fos_user_content %}*/

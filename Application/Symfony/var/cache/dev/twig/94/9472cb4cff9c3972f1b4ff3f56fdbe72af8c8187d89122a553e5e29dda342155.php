<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cbf1fe2efee29b2065716516bf781d01a90ad2c052ba3a6a33fe3c6ed2be6753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fd1d71f3af888d31b1b628d54a336332fdc0dac11ba38401108d347aef97a1c = $this->env->getExtension("native_profiler");
        $__internal_5fd1d71f3af888d31b1b628d54a336332fdc0dac11ba38401108d347aef97a1c->enter($__internal_5fd1d71f3af888d31b1b628d54a336332fdc0dac11ba38401108d347aef97a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fd1d71f3af888d31b1b628d54a336332fdc0dac11ba38401108d347aef97a1c->leave($__internal_5fd1d71f3af888d31b1b628d54a336332fdc0dac11ba38401108d347aef97a1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00033ad96cd2b0bc04741b3875a73b50edf15a9f6c4a2efeb96cdb57e002ca1b = $this->env->getExtension("native_profiler");
        $__internal_00033ad96cd2b0bc04741b3875a73b50edf15a9f6c4a2efeb96cdb57e002ca1b->enter($__internal_00033ad96cd2b0bc04741b3875a73b50edf15a9f6c4a2efeb96cdb57e002ca1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00033ad96cd2b0bc04741b3875a73b50edf15a9f6c4a2efeb96cdb57e002ca1b->leave($__internal_00033ad96cd2b0bc04741b3875a73b50edf15a9f6c4a2efeb96cdb57e002ca1b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb287743c177a52d9339937f74bec2c296a499de59d08f20ff7f93bcdeb4f4e1 = $this->env->getExtension("native_profiler");
        $__internal_eb287743c177a52d9339937f74bec2c296a499de59d08f20ff7f93bcdeb4f4e1->enter($__internal_eb287743c177a52d9339937f74bec2c296a499de59d08f20ff7f93bcdeb4f4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eb287743c177a52d9339937f74bec2c296a499de59d08f20ff7f93bcdeb4f4e1->leave($__internal_eb287743c177a52d9339937f74bec2c296a499de59d08f20ff7f93bcdeb4f4e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

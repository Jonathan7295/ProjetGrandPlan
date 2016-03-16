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
        $__internal_8f2b4ba516ac940fce03290f33a871128935964eaa2231c53106d863e6e4696b = $this->env->getExtension("native_profiler");
        $__internal_8f2b4ba516ac940fce03290f33a871128935964eaa2231c53106d863e6e4696b->enter($__internal_8f2b4ba516ac940fce03290f33a871128935964eaa2231c53106d863e6e4696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2b4ba516ac940fce03290f33a871128935964eaa2231c53106d863e6e4696b->leave($__internal_8f2b4ba516ac940fce03290f33a871128935964eaa2231c53106d863e6e4696b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2137bfbd07b4352e7c6c76cab005b60abbacbd08b6b254394d0052f71b461a1 = $this->env->getExtension("native_profiler");
        $__internal_d2137bfbd07b4352e7c6c76cab005b60abbacbd08b6b254394d0052f71b461a1->enter($__internal_d2137bfbd07b4352e7c6c76cab005b60abbacbd08b6b254394d0052f71b461a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d2137bfbd07b4352e7c6c76cab005b60abbacbd08b6b254394d0052f71b461a1->leave($__internal_d2137bfbd07b4352e7c6c76cab005b60abbacbd08b6b254394d0052f71b461a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59b8222c46b4879df079efb38fd537a612d6c299c5b2c65a194d8c7ccab6cf4f = $this->env->getExtension("native_profiler");
        $__internal_59b8222c46b4879df079efb38fd537a612d6c299c5b2c65a194d8c7ccab6cf4f->enter($__internal_59b8222c46b4879df079efb38fd537a612d6c299c5b2c65a194d8c7ccab6cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59b8222c46b4879df079efb38fd537a612d6c299c5b2c65a194d8c7ccab6cf4f->leave($__internal_59b8222c46b4879df079efb38fd537a612d6c299c5b2c65a194d8c7ccab6cf4f_prof);

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

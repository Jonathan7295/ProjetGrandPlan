<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09c4b6b7abb4d126d058e30be61d91bf75dfb60f1a004c2a678f0d2735560570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_5cc7eeaf8d1f02c77671d14e96c782533ab9c47b500955275417870e3f12191d = $this->env->getExtension("native_profiler");
        $__internal_5cc7eeaf8d1f02c77671d14e96c782533ab9c47b500955275417870e3f12191d->enter($__internal_5cc7eeaf8d1f02c77671d14e96c782533ab9c47b500955275417870e3f12191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc7eeaf8d1f02c77671d14e96c782533ab9c47b500955275417870e3f12191d->leave($__internal_5cc7eeaf8d1f02c77671d14e96c782533ab9c47b500955275417870e3f12191d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4511f97863bf36b747a8389b41d86588e9d58eb37f58ff8067955569cb50486e = $this->env->getExtension("native_profiler");
        $__internal_4511f97863bf36b747a8389b41d86588e9d58eb37f58ff8067955569cb50486e->enter($__internal_4511f97863bf36b747a8389b41d86588e9d58eb37f58ff8067955569cb50486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4511f97863bf36b747a8389b41d86588e9d58eb37f58ff8067955569cb50486e->leave($__internal_4511f97863bf36b747a8389b41d86588e9d58eb37f58ff8067955569cb50486e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41184a2599538efa77924628d969028dcb512676d5bfb2ea94b8f551fd9f7547 = $this->env->getExtension("native_profiler");
        $__internal_41184a2599538efa77924628d969028dcb512676d5bfb2ea94b8f551fd9f7547->enter($__internal_41184a2599538efa77924628d969028dcb512676d5bfb2ea94b8f551fd9f7547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41184a2599538efa77924628d969028dcb512676d5bfb2ea94b8f551fd9f7547->leave($__internal_41184a2599538efa77924628d969028dcb512676d5bfb2ea94b8f551fd9f7547_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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

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
        $__internal_9b663d1b69ae8dd9b7bcb76ea05aab50488d863c41cad5d1ca03dda7cfcc0285 = $this->env->getExtension("native_profiler");
        $__internal_9b663d1b69ae8dd9b7bcb76ea05aab50488d863c41cad5d1ca03dda7cfcc0285->enter($__internal_9b663d1b69ae8dd9b7bcb76ea05aab50488d863c41cad5d1ca03dda7cfcc0285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b663d1b69ae8dd9b7bcb76ea05aab50488d863c41cad5d1ca03dda7cfcc0285->leave($__internal_9b663d1b69ae8dd9b7bcb76ea05aab50488d863c41cad5d1ca03dda7cfcc0285_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c355cce35f30343302f236fc5585f85e14ee1712f643af0533ea18ae916f4282 = $this->env->getExtension("native_profiler");
        $__internal_c355cce35f30343302f236fc5585f85e14ee1712f643af0533ea18ae916f4282->enter($__internal_c355cce35f30343302f236fc5585f85e14ee1712f643af0533ea18ae916f4282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c355cce35f30343302f236fc5585f85e14ee1712f643af0533ea18ae916f4282->leave($__internal_c355cce35f30343302f236fc5585f85e14ee1712f643af0533ea18ae916f4282_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8492a6608cee6f5308438737f9c8e036a5d0de7d55d3f06353639fe952a2c8ea = $this->env->getExtension("native_profiler");
        $__internal_8492a6608cee6f5308438737f9c8e036a5d0de7d55d3f06353639fe952a2c8ea->enter($__internal_8492a6608cee6f5308438737f9c8e036a5d0de7d55d3f06353639fe952a2c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8492a6608cee6f5308438737f9c8e036a5d0de7d55d3f06353639fe952a2c8ea->leave($__internal_8492a6608cee6f5308438737f9c8e036a5d0de7d55d3f06353639fe952a2c8ea_prof);

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

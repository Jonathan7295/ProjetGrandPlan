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
        $__internal_7f881dd4151cdc395a0499cce01335ebedc0878d3aae7351f1f51decab549869 = $this->env->getExtension("native_profiler");
        $__internal_7f881dd4151cdc395a0499cce01335ebedc0878d3aae7351f1f51decab549869->enter($__internal_7f881dd4151cdc395a0499cce01335ebedc0878d3aae7351f1f51decab549869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f881dd4151cdc395a0499cce01335ebedc0878d3aae7351f1f51decab549869->leave($__internal_7f881dd4151cdc395a0499cce01335ebedc0878d3aae7351f1f51decab549869_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa96c1d11c63aa6e687a36253cf291cfa9ef1c3019cf161ec7401602bfe076e3 = $this->env->getExtension("native_profiler");
        $__internal_fa96c1d11c63aa6e687a36253cf291cfa9ef1c3019cf161ec7401602bfe076e3->enter($__internal_fa96c1d11c63aa6e687a36253cf291cfa9ef1c3019cf161ec7401602bfe076e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa96c1d11c63aa6e687a36253cf291cfa9ef1c3019cf161ec7401602bfe076e3->leave($__internal_fa96c1d11c63aa6e687a36253cf291cfa9ef1c3019cf161ec7401602bfe076e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a2027d4a5d05473e877a7c9502c4a1eb4cace8ad78fc0da11479ec2b130c5a8 = $this->env->getExtension("native_profiler");
        $__internal_1a2027d4a5d05473e877a7c9502c4a1eb4cace8ad78fc0da11479ec2b130c5a8->enter($__internal_1a2027d4a5d05473e877a7c9502c4a1eb4cace8ad78fc0da11479ec2b130c5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a2027d4a5d05473e877a7c9502c4a1eb4cace8ad78fc0da11479ec2b130c5a8->leave($__internal_1a2027d4a5d05473e877a7c9502c4a1eb4cace8ad78fc0da11479ec2b130c5a8_prof);

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

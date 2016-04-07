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
        $__internal_963600ca9900189f56f3621b4904194bd1c125ff342e2953607b34186a7968a9 = $this->env->getExtension("native_profiler");
        $__internal_963600ca9900189f56f3621b4904194bd1c125ff342e2953607b34186a7968a9->enter($__internal_963600ca9900189f56f3621b4904194bd1c125ff342e2953607b34186a7968a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_963600ca9900189f56f3621b4904194bd1c125ff342e2953607b34186a7968a9->leave($__internal_963600ca9900189f56f3621b4904194bd1c125ff342e2953607b34186a7968a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_149e892a06c7ed8c849d2f10c50cd97559b2b358e05b6925e19eb0cc504377df = $this->env->getExtension("native_profiler");
        $__internal_149e892a06c7ed8c849d2f10c50cd97559b2b358e05b6925e19eb0cc504377df->enter($__internal_149e892a06c7ed8c849d2f10c50cd97559b2b358e05b6925e19eb0cc504377df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_149e892a06c7ed8c849d2f10c50cd97559b2b358e05b6925e19eb0cc504377df->leave($__internal_149e892a06c7ed8c849d2f10c50cd97559b2b358e05b6925e19eb0cc504377df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04af0b483885b2a2e72b0f8324295c196e794c3a4e5570cbe69b3db36c370b23 = $this->env->getExtension("native_profiler");
        $__internal_04af0b483885b2a2e72b0f8324295c196e794c3a4e5570cbe69b3db36c370b23->enter($__internal_04af0b483885b2a2e72b0f8324295c196e794c3a4e5570cbe69b3db36c370b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04af0b483885b2a2e72b0f8324295c196e794c3a4e5570cbe69b3db36c370b23->leave($__internal_04af0b483885b2a2e72b0f8324295c196e794c3a4e5570cbe69b3db36c370b23_prof);

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

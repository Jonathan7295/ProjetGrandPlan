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
        $__internal_a17857796791242e6e9714aa1e1a6a3698362f2515c7dd77052d42efe12c5eeb = $this->env->getExtension("native_profiler");
        $__internal_a17857796791242e6e9714aa1e1a6a3698362f2515c7dd77052d42efe12c5eeb->enter($__internal_a17857796791242e6e9714aa1e1a6a3698362f2515c7dd77052d42efe12c5eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17857796791242e6e9714aa1e1a6a3698362f2515c7dd77052d42efe12c5eeb->leave($__internal_a17857796791242e6e9714aa1e1a6a3698362f2515c7dd77052d42efe12c5eeb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_106d1ec7523fb7615b4b9c9a501c745fca5e79492b0b1369f46ad52681c61dde = $this->env->getExtension("native_profiler");
        $__internal_106d1ec7523fb7615b4b9c9a501c745fca5e79492b0b1369f46ad52681c61dde->enter($__internal_106d1ec7523fb7615b4b9c9a501c745fca5e79492b0b1369f46ad52681c61dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_106d1ec7523fb7615b4b9c9a501c745fca5e79492b0b1369f46ad52681c61dde->leave($__internal_106d1ec7523fb7615b4b9c9a501c745fca5e79492b0b1369f46ad52681c61dde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a7432614877695fc81a07e9b781bf0b8ab0d238ca6e7a21330e4243f7b0b02 = $this->env->getExtension("native_profiler");
        $__internal_59a7432614877695fc81a07e9b781bf0b8ab0d238ca6e7a21330e4243f7b0b02->enter($__internal_59a7432614877695fc81a07e9b781bf0b8ab0d238ca6e7a21330e4243f7b0b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59a7432614877695fc81a07e9b781bf0b8ab0d238ca6e7a21330e4243f7b0b02->leave($__internal_59a7432614877695fc81a07e9b781bf0b8ab0d238ca6e7a21330e4243f7b0b02_prof);

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

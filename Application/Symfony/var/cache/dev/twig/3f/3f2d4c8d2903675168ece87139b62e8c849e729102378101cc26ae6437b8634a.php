<?php

/* ::base.html.twig */
class __TwigTemplate_7ae02706e6817483498a98aebca50751293e98c85701dfa20b4eb4c5947fa6a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af1f963072bff293ed48492da89c846b501b8ac8981d6bdd7a639808617a1c5c = $this->env->getExtension("native_profiler");
        $__internal_af1f963072bff293ed48492da89c846b501b8ac8981d6bdd7a639808617a1c5c->enter($__internal_af1f963072bff293ed48492da89c846b501b8ac8981d6bdd7a639808617a1c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_af1f963072bff293ed48492da89c846b501b8ac8981d6bdd7a639808617a1c5c->leave($__internal_af1f963072bff293ed48492da89c846b501b8ac8981d6bdd7a639808617a1c5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_842f9dc6fe67cb86bdbb6c2c8f664aef4b8ed96ec7992fc637b086cff7e8d58b = $this->env->getExtension("native_profiler");
        $__internal_842f9dc6fe67cb86bdbb6c2c8f664aef4b8ed96ec7992fc637b086cff7e8d58b->enter($__internal_842f9dc6fe67cb86bdbb6c2c8f664aef4b8ed96ec7992fc637b086cff7e8d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_842f9dc6fe67cb86bdbb6c2c8f664aef4b8ed96ec7992fc637b086cff7e8d58b->leave($__internal_842f9dc6fe67cb86bdbb6c2c8f664aef4b8ed96ec7992fc637b086cff7e8d58b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cbf7013de352e85b85c390aa2b74e172ac4140f83460ef9c37f166375c058ad = $this->env->getExtension("native_profiler");
        $__internal_5cbf7013de352e85b85c390aa2b74e172ac4140f83460ef9c37f166375c058ad->enter($__internal_5cbf7013de352e85b85c390aa2b74e172ac4140f83460ef9c37f166375c058ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5cbf7013de352e85b85c390aa2b74e172ac4140f83460ef9c37f166375c058ad->leave($__internal_5cbf7013de352e85b85c390aa2b74e172ac4140f83460ef9c37f166375c058ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_238342826453909644f80b1201b4a442f7032222c6062e3ee3a0117e90affb26 = $this->env->getExtension("native_profiler");
        $__internal_238342826453909644f80b1201b4a442f7032222c6062e3ee3a0117e90affb26->enter($__internal_238342826453909644f80b1201b4a442f7032222c6062e3ee3a0117e90affb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_238342826453909644f80b1201b4a442f7032222c6062e3ee3a0117e90affb26->leave($__internal_238342826453909644f80b1201b4a442f7032222c6062e3ee3a0117e90affb26_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_398faac26aa36edc297a067ba96ed10a251411693bd03e06572266ce944f266b = $this->env->getExtension("native_profiler");
        $__internal_398faac26aa36edc297a067ba96ed10a251411693bd03e06572266ce944f266b->enter($__internal_398faac26aa36edc297a067ba96ed10a251411693bd03e06572266ce944f266b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_398faac26aa36edc297a067ba96ed10a251411693bd03e06572266ce944f266b->leave($__internal_398faac26aa36edc297a067ba96ed10a251411693bd03e06572266ce944f266b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

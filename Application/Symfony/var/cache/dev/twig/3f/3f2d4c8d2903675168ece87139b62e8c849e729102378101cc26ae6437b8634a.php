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
        $__internal_46686f87bdda1bb0abc3cd14293c26c2c0f0fbc932b40708de4d39ae177bb2b1 = $this->env->getExtension("native_profiler");
        $__internal_46686f87bdda1bb0abc3cd14293c26c2c0f0fbc932b40708de4d39ae177bb2b1->enter($__internal_46686f87bdda1bb0abc3cd14293c26c2c0f0fbc932b40708de4d39ae177bb2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_46686f87bdda1bb0abc3cd14293c26c2c0f0fbc932b40708de4d39ae177bb2b1->leave($__internal_46686f87bdda1bb0abc3cd14293c26c2c0f0fbc932b40708de4d39ae177bb2b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94b75ab36f781d97f30b36ad456da6c82e5b60fdaa40f843a96eef795eec404f = $this->env->getExtension("native_profiler");
        $__internal_94b75ab36f781d97f30b36ad456da6c82e5b60fdaa40f843a96eef795eec404f->enter($__internal_94b75ab36f781d97f30b36ad456da6c82e5b60fdaa40f843a96eef795eec404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_94b75ab36f781d97f30b36ad456da6c82e5b60fdaa40f843a96eef795eec404f->leave($__internal_94b75ab36f781d97f30b36ad456da6c82e5b60fdaa40f843a96eef795eec404f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35ab691b6952a23ff49ae6847ffc25e8cab14cf140098ff74d1d33a0a49683bf = $this->env->getExtension("native_profiler");
        $__internal_35ab691b6952a23ff49ae6847ffc25e8cab14cf140098ff74d1d33a0a49683bf->enter($__internal_35ab691b6952a23ff49ae6847ffc25e8cab14cf140098ff74d1d33a0a49683bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35ab691b6952a23ff49ae6847ffc25e8cab14cf140098ff74d1d33a0a49683bf->leave($__internal_35ab691b6952a23ff49ae6847ffc25e8cab14cf140098ff74d1d33a0a49683bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_85dc8684c42a01c40431b4e0b453bcbdfe7fc056cc561e289a8b1f1462b9c543 = $this->env->getExtension("native_profiler");
        $__internal_85dc8684c42a01c40431b4e0b453bcbdfe7fc056cc561e289a8b1f1462b9c543->enter($__internal_85dc8684c42a01c40431b4e0b453bcbdfe7fc056cc561e289a8b1f1462b9c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85dc8684c42a01c40431b4e0b453bcbdfe7fc056cc561e289a8b1f1462b9c543->leave($__internal_85dc8684c42a01c40431b4e0b453bcbdfe7fc056cc561e289a8b1f1462b9c543_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63a9e69c36017e3608ac27897d416c2e5c8ce81ee677b861e1ff1fc4df4f5913 = $this->env->getExtension("native_profiler");
        $__internal_63a9e69c36017e3608ac27897d416c2e5c8ce81ee677b861e1ff1fc4df4f5913->enter($__internal_63a9e69c36017e3608ac27897d416c2e5c8ce81ee677b861e1ff1fc4df4f5913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_63a9e69c36017e3608ac27897d416c2e5c8ce81ee677b861e1ff1fc4df4f5913->leave($__internal_63a9e69c36017e3608ac27897d416c2e5c8ce81ee677b861e1ff1fc4df4f5913_prof);

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

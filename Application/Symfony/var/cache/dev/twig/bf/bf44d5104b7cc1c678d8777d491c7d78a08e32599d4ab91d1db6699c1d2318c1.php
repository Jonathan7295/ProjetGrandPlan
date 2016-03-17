<?php

/* base.html.twig */
class __TwigTemplate_551cf9e067eb7023366192357609329c705d79651289d47635a3838728a42e63 extends Twig_Template
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
        $__internal_eaff509bcf8f433ca6b908e608e9fb65e166ecf9ccad0484087a4afb7e9a26b7 = $this->env->getExtension("native_profiler");
        $__internal_eaff509bcf8f433ca6b908e608e9fb65e166ecf9ccad0484087a4afb7e9a26b7->enter($__internal_eaff509bcf8f433ca6b908e608e9fb65e166ecf9ccad0484087a4afb7e9a26b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_eaff509bcf8f433ca6b908e608e9fb65e166ecf9ccad0484087a4afb7e9a26b7->leave($__internal_eaff509bcf8f433ca6b908e608e9fb65e166ecf9ccad0484087a4afb7e9a26b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d1a71653d50f5a82bf30325a9b80c57b67b0aeeb3bdaacf2892da8f32b180c = $this->env->getExtension("native_profiler");
        $__internal_a1d1a71653d50f5a82bf30325a9b80c57b67b0aeeb3bdaacf2892da8f32b180c->enter($__internal_a1d1a71653d50f5a82bf30325a9b80c57b67b0aeeb3bdaacf2892da8f32b180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1d1a71653d50f5a82bf30325a9b80c57b67b0aeeb3bdaacf2892da8f32b180c->leave($__internal_a1d1a71653d50f5a82bf30325a9b80c57b67b0aeeb3bdaacf2892da8f32b180c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4c3511ac00fae656519223cc4d67aae2d92b55eb13d9b95511ba8514bf09b1e = $this->env->getExtension("native_profiler");
        $__internal_e4c3511ac00fae656519223cc4d67aae2d92b55eb13d9b95511ba8514bf09b1e->enter($__internal_e4c3511ac00fae656519223cc4d67aae2d92b55eb13d9b95511ba8514bf09b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e4c3511ac00fae656519223cc4d67aae2d92b55eb13d9b95511ba8514bf09b1e->leave($__internal_e4c3511ac00fae656519223cc4d67aae2d92b55eb13d9b95511ba8514bf09b1e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_707c9f84398cedb0388245541572874a3bb6ee13ae4c5da6a0fcc5bb8173dc4d = $this->env->getExtension("native_profiler");
        $__internal_707c9f84398cedb0388245541572874a3bb6ee13ae4c5da6a0fcc5bb8173dc4d->enter($__internal_707c9f84398cedb0388245541572874a3bb6ee13ae4c5da6a0fcc5bb8173dc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_707c9f84398cedb0388245541572874a3bb6ee13ae4c5da6a0fcc5bb8173dc4d->leave($__internal_707c9f84398cedb0388245541572874a3bb6ee13ae4c5da6a0fcc5bb8173dc4d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee46ff9adf533710fe45396a7945c0a301ad6c7bdbff85d29f93ca6e5622e867 = $this->env->getExtension("native_profiler");
        $__internal_ee46ff9adf533710fe45396a7945c0a301ad6c7bdbff85d29f93ca6e5622e867->enter($__internal_ee46ff9adf533710fe45396a7945c0a301ad6c7bdbff85d29f93ca6e5622e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee46ff9adf533710fe45396a7945c0a301ad6c7bdbff85d29f93ca6e5622e867->leave($__internal_ee46ff9adf533710fe45396a7945c0a301ad6c7bdbff85d29f93ca6e5622e867_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

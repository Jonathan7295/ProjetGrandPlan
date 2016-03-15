<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_75d448957d7eb19ca5485324f685d4866c7ad9ea834fcd2d1a1549b6cb273b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0bedcaf4cc8475830c76ff9207461c86794f27cd998314d1d1a992f644e57b = $this->env->getExtension("native_profiler");
        $__internal_5e0bedcaf4cc8475830c76ff9207461c86794f27cd998314d1d1a992f644e57b->enter($__internal_5e0bedcaf4cc8475830c76ff9207461c86794f27cd998314d1d1a992f644e57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5e0bedcaf4cc8475830c76ff9207461c86794f27cd998314d1d1a992f644e57b->leave($__internal_5e0bedcaf4cc8475830c76ff9207461c86794f27cd998314d1d1a992f644e57b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */

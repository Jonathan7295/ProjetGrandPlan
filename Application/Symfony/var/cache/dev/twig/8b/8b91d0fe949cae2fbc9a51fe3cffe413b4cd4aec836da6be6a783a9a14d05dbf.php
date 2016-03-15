<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_425363f35080eacc2508ac62e521f1ce7a6c7749018a00d6c14cf2ddda1b519b extends Twig_Template
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
        $__internal_1839aa8b4725736ad0ff684e7050ee433c67b5804fc7ffe693fb2239d90d125c = $this->env->getExtension("native_profiler");
        $__internal_1839aa8b4725736ad0ff684e7050ee433c67b5804fc7ffe693fb2239d90d125c->enter($__internal_1839aa8b4725736ad0ff684e7050ee433c67b5804fc7ffe693fb2239d90d125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1839aa8b4725736ad0ff684e7050ee433c67b5804fc7ffe693fb2239d90d125c->leave($__internal_1839aa8b4725736ad0ff684e7050ee433c67b5804fc7ffe693fb2239d90d125c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

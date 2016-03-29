<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e93a1315b771ca98244a019986bde6c6d7fcbc795a41f20a47454921afb7d450 extends Twig_Template
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
        $__internal_9a69c7f136de1154552f0385af7977daf3d318e8e7a85e054b3cf0b416534485 = $this->env->getExtension("native_profiler");
        $__internal_9a69c7f136de1154552f0385af7977daf3d318e8e7a85e054b3cf0b416534485->enter($__internal_9a69c7f136de1154552f0385af7977daf3d318e8e7a85e054b3cf0b416534485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9a69c7f136de1154552f0385af7977daf3d318e8e7a85e054b3cf0b416534485->leave($__internal_9a69c7f136de1154552f0385af7977daf3d318e8e7a85e054b3cf0b416534485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

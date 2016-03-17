<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d95936679f91b4edda090ed584d54ff0dd902975cebedf23e691ec830907f40b extends Twig_Template
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
        $__internal_15a6a403d3ebb37ebead8b92bff885315db4bb9b83d99b69e9838bc369b42d70 = $this->env->getExtension("native_profiler");
        $__internal_15a6a403d3ebb37ebead8b92bff885315db4bb9b83d99b69e9838bc369b42d70->enter($__internal_15a6a403d3ebb37ebead8b92bff885315db4bb9b83d99b69e9838bc369b42d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_15a6a403d3ebb37ebead8b92bff885315db4bb9b83d99b69e9838bc369b42d70->leave($__internal_15a6a403d3ebb37ebead8b92bff885315db4bb9b83d99b69e9838bc369b42d70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

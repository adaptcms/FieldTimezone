<template>
  <SelectField
    v-if="timezones.length"
    :id="`form-${field.column_name}`"
    :fieldName="field.column_name"
    :errors="errors"
    v-model="selected"
  >
    <template v-slot:options>
      <option
        v-for="timezone in timezones"
        :key="`option-${timezone}`"
        :value="timezone"
      >
        {{ timezone }}
      </option>
    </template>
  </SelectField>
</template>

<script>
import { get } from 'lodash'
import SelectField from '@/Adaptcms/Base/ui/components/Form/SelectField'

export default {
  props: [
    'modelValue',
    'field',
    'errors',
    'formMeta',
    'model',
    'action'
  ],

  emits: [
    'update:modelValue'
  ],

  components: {
    SelectField
  },

  watch: {
    modelValue (newVal, oldVal) {
      if (newVal && newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.$emit('update:modelValue', newVal)
      }
    }
  },

  computed: {
    timezones () {
      return get(this.formMeta, `${this.field.column_name}.timezones`, [])
    }
  },

  data () {
    return {
      selected: null
    }
  },

  mounted () {
    if (this.modelValue) {
      this.selected = this.modelValue
    }
  }
}
</script>

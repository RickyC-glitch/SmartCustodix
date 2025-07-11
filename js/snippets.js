const myDatePickerDisabledDates = document.getElementById('myDatePickerDisabledDates')
if (myDatePickerDisabledDates) {
  const optionsDatePickerDisabledDates = {
    locale: 'en-US',
    calendarDate: new Date(2022, 2, 1),
    disabledDates: [
      [new Date(2022, 2, 4), new Date(2022, 2, 7)],
      new Date(2022, 2, 16),
      new Date(2022, 3, 16),
      [new Date(2022, 4, 2), new Date(2022, 4, 8)]
    ],
    maxDate: new Date(2022, 5, 0),
    minDate: new Date(2022, 1, 1)
  }

  new coreui.DatePicker(myDatePickerDisabledDates, optionsDatePickerDisabledDates)
}
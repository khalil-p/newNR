import Select from "react-select";
import { StarIcon } from "@heroicons/react/16/solid";

const getCustomStyles = (height) => ({
  control: (provided, state) => ({
    ...provided,
    height: height || "2rem", // Use dynamic height prop, default to 2rem
    minHeight: height || "2rem", // Ensure the control maintains the height
    fontSize: "0.875rem", // Match text-sm
    fontWeight: "600", // Match font-semibold
    padding: "0px", // Remove padding to fit height
    border: "2px solid rgba(222, 226, 230)", // Custom border
    borderRadius: "0.5rem", // Match rounded-lg
    boxShadow: "none",
    margin: 0, // Remove margin
    zIndex: 10,
    display: "flex", // Ensure it remains a flex container
    alignItems: "center", // Center content vertically
    "&:hover": {
      borderColor: "rgba(222, 226, 230)", // Same border color on hover
    },
    opacity: state.isDisabled ? 0.7 : 1,
    backgroundColor: state.isDisabled ? "#c3bfbf" : "white", // Disabled state background
    cursor: state.isDisabled ? "not-allowed" : "default",
  }),
  valueContainer: (provided) => ({
    ...provided,
    padding: "0 0.5rem", // Adjust padding to match px-2
    display: "flex",
    alignItems: "center", // Center value vertically
    height: "100%", // Ensure it fills the control's height
  }),
  input: (provided) => ({
    ...provided,
    margin: 0,
    padding: 0,
  }),
  placeholder: (provided) => ({
    width: "max-content",
    ...provided,
    margin: 0,
    padding: 0, // Remove padding
    fontSize: "0.8rem",
    fontWeight: "500", // Match font-medium for the placeholder
    color: "rgb(108 117 125 / 0.8)", // Text color for placeholder
    display: "flex",
    position: "absolute",
    alignItems: "center", // Align placeholder text centrally
    height: "100%", // Ensure it fills the container
  }),
  singleValue: (provided) => ({
    ...provided,
    margin: 0,
    padding: 0, // Remove padding
    display: "flex",
    alignItems: "center", // Align selected value centrally
    height: "100%", // Ensure it fills the container
  }),
  indicatorsContainer: (provided) => ({
    ...provided,
    padding: "0", // Remove padding for indicators
    height: "100%", // Ensure indicators fill the height
    display: "flex",
    alignItems: "center", // Center indicators vertically
  }),
  indicatorSeparator: () => ({
    display: "none", // Remove the default separator between indicators and input
  }),
  dropdownIndicator: (provided) => ({
    ...provided,
    padding: "0.25rem", // Minimal padding for the dropdown arrow
  }),
  menu: (provided) => ({
    ...provided,
    fontSize: "0.875rem", // Match text-sm
    fontWeight: "500", // Set the desired font weight
    zIndex: 9999,
  }),
  option: (provided, state) => ({
    ...provided,
    fontSize: "0.875rem", // Match text-sm
    fontWeight: state.isSelected ? "600" : "600", // Set bold for selected option
    color: state.isSelected ? "white" : "#161A23",
    backgroundColor: state.isSelected
      ? "rgb(var(--color-primary) / var(--tw-bg-opacity))" // Custom background for selected option
      : "white",
    "&:hover": {
      backgroundColor: state.isSelected
        ? "rgb(var(--color-primary) / var(--tw-bg-opacity))"
        : "rgba(108, 117, 125, 0.1)", // Background on hover
    },
  }),
});

const MultiSelectReact = ({
  label,
  icon,
  error,
  containerClass,
  isRequired,
  placeholder = "Select an option", // Default placeholder
  height = "2rem", // Add height prop with default value
  isDisabled = false,
  ...rest
}) => {
  const isError = error?.message ? true : false;
  const customStyles = getCustomStyles(height); // Pass height to the custom styles
  return (
    <div className={`flex flex-col w-full ${containerClass}`}>
      {label && (
        // <label className="text-xs flex items-center gap-1 text-left text-black/80 pl-1 font-semiBold_J">
        <label className="text-sm flex items-center gap-1 text-left text-black/80 pl-1">
          {label}
          {isRequired && (
            <StarIcon className="size-2 text-error -translate-y-1" />
          )}
        </label>
      )}
      <section className="w-full relative m-0 ">
        <Select
          {...rest}
          isDisabled={isDisabled}
          styles={customStyles}
          placeholder={placeholder}
          isClearable
        />

        <span
          className={`${
            isError ? "text-error" : "text-darkGray/80"
          } absolute w-5 right-3 top-1/2 -translate-y-1/2 p-0`}
        >
          {icon}
        </span>
      </section>
      {isError && (
        <p className="text-xs text-error/90 font-medium pl-1">
          {error?.message}
        </p>
      )}
    </div>
  );
};

export default MultiSelectReact;
